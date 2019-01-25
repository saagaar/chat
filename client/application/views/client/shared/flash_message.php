<?php
    if ($this->session->flashdata('success')) {
        echo "<div data-alert class='alert-success alert'><a href='#' class='close'>&times;</a>&nbsp;<b>".$this->session->flashdata('success')." </b></div>";
    }

    if($this->session->flashdata('error')){
        echo "<div data-alert class='alert-danger alert'><a href='#' class='close'>&times;</a>&nbsp;<b>".$this->session->flashdata('error')." </b></div>";
    }
?>