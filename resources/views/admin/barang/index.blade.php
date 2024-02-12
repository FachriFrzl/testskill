@extends('layouts.back')
@section('contents')
				<!--begin::Row-->
                    <div class="d-flex flex-column-fluid">
							<div class="container">
								<div class="row">
									<div class="col">
										<!--begin::Advance Table Widget 4-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 py-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Data Produk</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">Rincian Produk</span>
                                                    <a href="{{route('createbarang')}}" class="btn btn-light-success mt-5">Tambah</a>
												</h3>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0 pb-3">
												<div class="tab-content">
													<!--begin::Table-->
													<div class="table-responsive">
                                                     @if(session('success'))
                                                    <div class="alert alert-success">
                                                        {{session('success')}}
                                                    </div>
                                                    @endif
														<table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
															<thead>
																<tr class="text-left text-uppercase">
																	<th style="min-width: 250px" class="pl-7">
																		<span class="text-dark-75">Kode Barang</span>
																	</th>
																	<th style="min-width: 100px">Nama Barang</th>
																	<th style="min-width: 100px">Harga/Satuan</th>
																	<th style="min-width: 150px">Aksi</th>																
                                                             </tr>
															</thead>
															<tbody>
                                                                @foreach($barangs as $barang)
																<tr>
																	<td class="pl-0 py-8">
																		<div class="d-flex align-items-center">
																			<div class="symbol symbol-50 symbol-light mr-4">
																				<span class="symbol-label">
																					<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
																				</span>
																			</div>
																			<div>
																				<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{$barang -> kode_barang}}</a>
																			</div>
																		</div>
																	</td>
																	<td>
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$barang -> nama_barang}}</span>
																	</td>
																	
																	<td>
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Rp.{{$barang -> harga}}</span>
																		<span class="text-muted font-weight-bold">{{$barang -> satuan }}</span>
																	</td>
																	<td class="pr-0 text-left">
																		<a href="{{route('editbarang',$barang->kode_barang)}}" class="btn btn-light-success font-weight-bolder font-size-sm">edit</a>
																		<a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">Delete</a>
																	</td>
																</tr>
                                                                @endforeach
															</tbody>
														</table>
													</div>
													<!--end::Table-->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 4-->
									</div>
								</div>
							</div>
								<!--end::Row-->
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
@endsection