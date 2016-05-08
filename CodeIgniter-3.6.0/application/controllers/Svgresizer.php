<?php
class svgResizer extends CI_Controller
{
    public function view($svgPath = '', $svgName = '', $scale = 1) {
        $data['title'] = 'svg Resizer';
        $data['svgPath'] = $svgPath;
        $data['svgName'] = $svgName;
        $data['scale'] = $scale;
        
        $this->load->view('svgResizer/header', $data);
        $this->load->view('svgResizer/svgResizer', $data);
        $this->load->view('svgResizer/footer', $data);
    }
}
