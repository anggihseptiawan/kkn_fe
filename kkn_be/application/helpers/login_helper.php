<?php

function is_logged_in()
{
    // untuk memanggil library CI
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        redirect('admin/auth');
    }
}

function logged_in()
{
    // untuk memanggil library CI
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        redirect('auth');
    }
}
