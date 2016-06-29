<?php
class Pages extends CI_Controller {

        public function index()
        {
          echo "string";
        }

        public function read()
        {
          $file = './assets/template.xlsx';
          $objPHPExcel = PHPExcel_IOFactory::load($file);

          $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
          foreach ($cell_collection as $cell) {
              $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
              $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
              $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();

              //header will/should be in row 1 only. of course this can be modified to suit your need.
              if ($row == 1) {
                  $header[$row][$column] = $data_value;
              } else {
                  $arr_data[$row][$column] = $data_value;
              }
          }

          //send the data in an array format
          $data['header'] = $header;
          $data['values'] = $arr_data;

          $this->load->view('page', $data);
        }
}
