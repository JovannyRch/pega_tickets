<?php

use App\Http\Controllers\PegaTicketController;
use Illuminate\Support\Facades\Route;

Route::get('/generate', [PegaTicketController::class, 'index'])->name('files.ui.single');

Route::post('/generate-pega-tickets', [PegaTicketController::class, 'generatePdfFromExcel'])->name('generate.pega.tickets');
Route::post('/generate-links-pega-tickets', [PegaTicketController::class, 'generateLinksFromExcel'])->name('generate.links.pega.tickets');
Route::get('/generate-pdf/{groupKey}', [PegaTicketController::class, 'downloadPDF'])->name('generate.pdf.pega.tickets');

require __DIR__ . '/auth.php';
