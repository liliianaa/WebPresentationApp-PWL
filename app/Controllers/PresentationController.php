<?php

namespace App\Controllers;

use App\Models\TutorialMasterModel;
use Dompdf\Dompdf;
use Dompdf\Options;


class PresentationController extends BaseController
{
    protected $tutorialModel;

    public function __construct()
    {
        $this->tutorialModel = new TutorialMasterModel();
    }

    public function show($slug)
    {

        $tutorial = $this->tutorialModel->where('url_presentation', $slug)->first();

        if ($tutorial) {
            $details = (new \App\Models\TutorialDetailModel())
                ->where('tutorial_id', $tutorial['id'])
                ->where('status', 'show')
                ->findAll();

            return view('view/presentation', [
                'tutorial' => $tutorial,
                'details' => $details,
            ]);
        }


        return redirect()->to('/tutorial');
    }

    public function finished($slug)
    {

        $tutorial = $this->tutorialModel->where('url_finished', $slug)->first();


        if ($tutorial) {
            $details = (new \App\Models\TutorialDetailModel())
                ->where('tutorial_id', $tutorial['id'])
                ->findAll();

            return view('view/finished', [
                'tutorial' => $tutorial,
                'details' => $details,
            ]);
        }


        return redirect()->to('/tutorial');
    }

    public function exportPdf($slug)
    {
        $tutorial = $this->tutorialModel->where('url_finished', $slug)->first();

        if (!$tutorial) {
            return redirect()->to('/tutorial')->with('error', 'Tutorial tidak ditemukan');
        }

        $details = (new \App\Models\TutorialDetailModel())
            ->where('tutorial_id', $tutorial['id'])
            ->findAll();

        $html = view('view/finished_pdf', [
            'tutorial' => $tutorial,
            'details' => $details,
        ]);

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream("Tutorial_" . $tutorial['judul'] . ".pdf", ["Attachment" => true]);
    }
}