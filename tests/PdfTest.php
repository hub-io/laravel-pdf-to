<?php

use Hubio\LaravelPdfTo\Pdf;
use Spatie\PdfToText\Exceptions\BinaryNotFoundException;

it('throws exception for missing binary', function () {
    $pdf = new Pdf;

    // Skip this test on Windows and PHP 8.5
    if (PHP_OS_FAMILY === 'Windows') {
        test()->skip('Skipped on Windows with PHP 8.5');
    }

    $this->expectException(BinaryNotFoundException::class);
    $pdf->findPdfTo('testing');
});
