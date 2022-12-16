<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\BookingModel;
use App\Models\ProductModel;
use App\Models\DesignModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Reservation extends BaseController
{
    public function __construct()
    {
        helper('number');
    }


    public function landing() /**------- LANDING PAGE FORM OF USER AND SYSTEM--------*/
    {
        return view('layout/landingpage');
    }

    public function design()
    {
        $designs = new DesignModel();
        $data['designs'] = $designs->findAll();
        return view('layout/design', $data);
    }

    public function booknow() /**------- BOOK NOW --------*/
    {
        $booking = new BookingModel();
        $data['booking'] = $booking->where('status', 'Approved')->findAll();
        return view('layout/booknow', $data);
    }

    public function products() /**------- BOOK NOW --------*/
    {
        $products = new ProductModel();
        $data['products'] = $products->findAll();
        return view('layout/products', $data);
    }

    public function bookoverview() 
    {   
        $booking = new BookingModel();
        $data['booking'] = $booking->findAll();
        return view('layout/bookoverview', $data);
    }

    public function reservation() /**------- BOOK NOW --------*/
    {
        $booking = new BookingModel();
        $data['booking'] = $booking->findAll();
        return view('admin_dashboard/reservation', $data);
    }

    public function reservation_report() /**------- BOOK NOW --------*/
    {
        $booking = new BookingModel();
        $data['booking'] = $booking->where('status', 'Finished')->findAll();
        return view('admin_dashboard/reservation_report', $data);
    }

    public function save()
    {
        $booking =new BookingModel();


        $data = [
            'fullname' => $this->request->getPost('fullname'),
            'contact' => $this->request->getPost('contact'),
            'email' => $this->request->getPost('email'),
            'category' => $this->request->getPost('category'),
            'location' => $this->request->getPost('location'),
            'date' => $this->request->getPost('date'),
            'start' => $this->request->getPost('start'),
            'end' => $this->request->getPost('end'),
            'status' => $this->request->getPost('status')
        ];

        $booking->save($data);
        return redirect()->to('booknow')->with('success', 'Your Book has been submitted. Wait for the Confirmation.');
    }

    public function edit($id)
    {
        $booking = new BookingModel();
        $data['booking'] = $booking -> find($id);
        return view('admin_dashboard/reservation_edit', $data);
    }

    public function update($id)
    {
        $booking = new BookingModel();
        $books_list = $booking->find($id);

        $data = [
            'fullname' => $this->request->getPost('fullname'),
            'contact' => $this->request->getPost('contact'),
            'email' => $this->request->getPost('email'),
            'category' => $this->request->getPost('category'),
            'location' => $this->request->getPost('location'),
            'date' => $this->request->getPost('date'),
            'start' => $this->request->getPost('start'),
            'end' => $this->request->getPost('end'),
            'status' => $this->request->getPost('status')   
        ];

        $booking->update($id, $data);
        return redirect()->to('reservation')->with('success', 'Reservation has been updated.');
    }

    public function reservation_exportreport()
    {
        $booking = new BookingModel();
        $fileName = 'reservation_report.xlsx';
        $spreadsheet = new Spreadsheet();

        $reservation = $booking->where('status', 'finished')->findAll();

        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Id');
        $sheet->setCellValue('B1', 'Fullname');
        $sheet->setCellValue('C1', 'Contact');
        $sheet->setCellValue('D1', 'Email');
        $sheet->setCellValue('E1', 'Category');
        $sheet->setCellValue('F1', 'Location');
        $sheet->setCellValue('G1', 'Date');
        $sheet->setCellValue('H1', 'Time Start');
        $sheet->setCellValue('I1', 'Time End');
        $rows = 2;
        foreach ($reservation as $row)
        {
            $sheet->setCellValue('A' . $rows, $row['id']);
            $sheet->setCellValue('B' . $rows, $row['fullname']);
            $sheet->setCellValue('C' . $rows, $row['contact']);
            $sheet->setCellValue('D' . $rows, $row['email']);
            $sheet->setCellValue('E' . $rows, $row['category']);
            $sheet->setCellValue('F' . $rows, $row['location']);
            $sheet->setCellValue('G' . $rows, $row['date']);
            $sheet->setCellValue('H' . $rows, $row['start']);
            $sheet->setCellValue('I' . $rows, $row['end']);
            $rows++;
        }
        $writer = new Xlsx($spreadsheet);
        $writer->save($fileName);
        header("Content-Type: application/vnd.ms-excel");
        header('Content-Disposition: attachment; filename="' . basename($fileName) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length:' . filesize($fileName));
        flush();
        readfile($fileName);
        exit;
    }

}

