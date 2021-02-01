@extends('layouts.app')

@section('content')
<main>
  <div class="container-fluid">
      <h1  class="mt-4 text-info font-weight-bold">Data Studi Kasus</h1>
      <div class="breadcrumb mb-4"></div>
      <div class="card mb-4">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>Nama</th>
                              <th>IPK Sebelumnya</th>
                              <th>SKS Yang Sudah Dikontrak</th>
                              <th>IPS Saat Ini</th>
                              <th>Jumlah SKS Yang Sedang Dikontrak</th>
                              <th>IPK</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                            <th>Nama</th>
                            <th>IPK Sebelumnya</th>
                            <th>SKS Yang Sudah Dikontrak</th>
                            <th>IPS Saat Ini</th>
                            <th>Jumlah SKS Yang Sedang Dikontrak</th>
                            <th>IPK</th>
                          </tr>
                      </tfoot>
                      <tbody>
                          @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->ipk_sebelumnya }}</td>
                                <td>{{ $item->sks_sudah_kontrak }}</td>
                                <td>{{ $item->ips_saat_ini }}</td>
                                <td>{{ $item->sks_sedang_kontrak }}</td>
                                <td>{{ 
                                number_format((($item->ipk_sebelumnya * $item->sks_sudah_kontrak)+
                                ($item->ips_saat_ini * $item->sks_sedang_kontrak))/
                                ($item->sks_sudah_kontrak + $item->sks_sedang_kontrak), 2, '.', '') }}</td>
                            </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection