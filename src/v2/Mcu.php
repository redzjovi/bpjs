<?php

namespace bpjs\pcare\v2;

use GuzzleHttp\Client;

class Mcu extends \bpjs\pcare\v1\BpjsIntegration
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param array $data
     * [
     *      'kdMcu' => 0,
     *      'noKunjungan' => '0114U1630316Y000003',
     *      'kdProvider' => '0114u163',
     *      'tglPelayanan' => '22-03-2016',
     *      'tekananDarahSistole' => 0,
     *      'tekananDarahDiastole' => 0,
     *      'radiologiFoto' => null,
     *      'darahRutinHemo' => 0,
     *      'darahRutinLeu' => 0,
     *      'darahRutinErit' => 7,
     *
     *      'darahRutinLaju' => 0,
     *      'darahRutinHema' => 0,
     *      'darahRutinTrom' => 0,
     *      'lemakDarahHDL' => 0,
     *      'lemakDarahLDL' => 0,
     *      'lemakDarahChol' => 0,
     *      'lemakDarahTrigli' => 0,
     *      'gulaDarahSewaktu' => 0,
     *      'gulaDarahPuasa' => 0,
     *      'gulaDarahPostPrandial' => 0,
     *
     *      'gulaDarahHbA1c' => 0,
     *      'fungsiHatiSGOT' => 0,
     *      'fungsiHatiSGPT' => 0,
     *      'fungsiHatiGamma' => 0,
     *      'fungsiHatiProtKual' => 0,
     *      'fungsiHatiAlbumin' => 0,
     *      'fungsiGinjalCrea' => 0,
     *      'fungsiGinjalUreum' => 0,
     *      'fungsiGinjalAsam' => 0,
     *      'fungsiJantungABI' => 0,
     *
     *      'fungsiJantungEKG' => null,
     *      'fungsiJantungEcho' => null,
     *      'funduskopi' => null,
     *      'pemeriksaanLain' => null,
     *      'keterangan' => null,
     * ]
     */
    public function add($data)
    {
        try {
            $response = $this->client->request(
                'POST',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v2/mcu',
                [
                    'headers' => $this->headers,
                    'json' => $data,
                ]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }

    /**
     * @param array $data
     * [
     *      'kdMCU' => 44,
     *      'noKunjungan' => '0114U1630316Y000003',
     *      'kdProvider' => '1301U007',
     *      'tglPelayanan' => '22-03-2016',
     *      'tekananDarahSistole' => 20,
     *      'tekananDarahDiastole' => 0,
     *      'radiologiFoto' => null,
     *      'darahRutinHemo' => 0,
     *      'darahRutinLeu' => 0,
     *      'darahRutinErit' => 0,
     *
     *      'darahRutinLaju' => 0,
     *      'darahRutinHema' => 0,
     *      'darahRutinTrom' => 0,
     *      'lemakDarahHDL' => 0,
     *      'lemakDarahLDL' => 0,
     *      'lemakDarahChol' => 0,
     *      'lemakDarahTrigli' => 0,
     *      'gulaDarahSewaktu' => 0,
     *      'gulaDarahPuasa' => 0,
     *      'gulaDarahPostPrandial' => 0,
     *
     *      'gulaDarahHbA1c' => 0,
     *      'fungsiHatiSGOT' => 0,
     *      'fungsiHatiSGPT' => 0,
     *      'fungsiHatiGamma' => 0,
     *      'fungsiHatiProtKual' => 0,
     *      'fungsiHatiAlbumin' => 0,
     *      'fungsiGinjalCrea' => 0,
     *      'fungsiGinjalUreum' => 0,
     *      'fungsiGinjalAsam' => 0,
     *      'fungsiJantungABI' => 0,
     *
     *      'fungsiJantungEKG' => null,
     *      'fungsiJantungEcho' => null,
     *      'funduskopi' => null,
     *      'pemeriksaanLain' => null,
     *      'keterangan' => null,
     * ]
     */
    public function edit($data)
    {
        try {
            $response = $this->client->request(
                'PUT',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v2/mcu',
                [
                    'headers' => $this->headers,
                    'json' => $data,
                ]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }

    public function kunjunganGet($noKunjungan)
    {
        try {
            $response = $this->client->request(
                'GET',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v2/mcu/kunjungan/'.$noKunjungan,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }
}
