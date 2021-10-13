<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index($id = null)
    {
        $karyawan = $id ? Karyawan::find($id) : Karyawan::get();

        $response       = [
            'status'    => 401,
            'message'   => 'Karyawan not found',
        ];

        if (!$karyawan)
        return $this->response($response);

        $response       = [
            'status'    => 200,
            'message'   => 'Success',
            'data'      => $karyawan,
        ];

        return $this->response($response);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required',
            'tglLahir'  => 'required',
        ]);

        $dobExp = explode('-', $request->tglLahir);
        $bulan  = (int) $dobExp[1];

        $data = [
            'nama'      => $request->nama,
            'hari'      => $dobExp[0],
            'bulan'     => $dobExp[1],
            'tahun'     => $dobExp[2],
            'zodiak'    => $this->zodiac("$bulan/{$dobExp[0]}"),
            'usia'      => date_diff(date_create(), date_create("{$dobExp[2]}-{$dobExp[1]}-{$dobExp[0]}"))->format('%Y'),
        ];

        $karyawan       = Karyawan::create($data);
        $response       = [
            'status'    => 200,
            'message'   => 'Success',
            'data'      => $karyawan,
        ];

        return $this->response($response);
    }

    public function zodiac($date)
    {
        $zodiac = 'Capricorn';
        if ('1/20' <= $date && $date <= '2/18')
        $zodiac = 'Aquarius';
        else if ('2/19' <= $date && $date <= '3/20')
        $zodiac = 'Pisces';
        else if ('3/21' <= $date && $date <= '4/19')
        $zodiac = 'Aries';
        else if ('4/20' <= $date && $date <= '5/20')
        $zodiac = 'Taurus';
        else if ('5/21' <= $date && $date <= '6/21')
        $zodiac = 'Gemini';
        else if ('6/22' <= $date && $date <= '7/22')
        $zodiac = 'Cancer';
        else if ('7/23' <= $date && $date <= '8/22')
        $zodiac = 'Leo';
        else if ('8/23' <= $date && $date <= '9/22')
        $zodiac = 'Virgo';
        else if ('9/23' <= $date && $date <= '10/22')
        $zodiac = 'Libra';
        else if ('10/23' <= $date && $date <= '11/21')
        $zodiac = 'Scorpio';
        else if ('11/22' <= $date && $date <= '12/21')
        $zodiac = 'Sagittarius';

        return $zodiac;
    }
}
