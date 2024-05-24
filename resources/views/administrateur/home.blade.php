@extends('administrateur.layouts.app')

@section('content')

 <div class="row mb-3">
              <div class="col-sm-12">
                <div class="statistics-details d-flex align-items-center justify-content-between">
                  <div>
                    <p class="statistics-title">Title Item</p>
                    <h3 class="rate-percentage">00</h3>
                  </div>
                  <div>
                    <p class="statistics-title">Title Item</p>
                    <h3 class="rate-percentage">00</h3>
                  </div>
                  <div>
                    <p class="statistics-title">Title Item</p>
                    <h3 class="rate-percentage">00</h3>
                  </div>
                  <div class="d-none d-md-block">
                    <p class="statistics-title">Title Item</p>
                    <h3 class="rate-percentage">00</h3>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                      <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                          <div>
                            <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                            <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                          </div>
                          <div id="performanceLine-legend"></div>
                        </div>
                        <div class="chartjs-wrapper mt-4">
                          <canvas id="performanceLine" width=""></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-primary card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                        <div class="row">
                          <div class="col-sm-4">
                            <p class="status-summary-ight-white mb-1">Closed Value</p>
                            <h2 class="text-info">357</h2>
                          </div>
                          <div class="col-sm-8">
                            <div class="status-summary-chart-wrapper pb-4">
                              <canvas id="status-summary"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                              <div class="circle-progress-width">
                                <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                              </div>
                              <div>
                                <p class="text-small mb-2">Total Visitors</p>
                                <h4 class="mb-0 fw-bold">26.80%</h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="circle-progress-width">
                                <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                              </div>
                              <div>
                                <p class="text-small mb-2">Visits per day</p>
                                <h4 class="mb-0 fw-bold">9065</h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              
              <div class="col-lg-12 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-8 grid-margin stretch-card">
                    <div class="card card-rounded">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="d-flex justify-content-between align-items-center">
                              <h4 class="card-title card-title-dash">Todo list</h4>
                              <div class="add-items d-flex mb-0">
                                <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                              </div>
                            </div>
                            <div class="list-wrapper">
                              <ul class="todo-list todo-list-rounded">
                                <li class="d-block">
                                  <div class="form-check w-100">
                                    <label class="form-check-label">
                                      <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                    </label>
                                    <div class="d-flex mt-2">
                                      <div class="ps-4 text-small me-3">24 June 2020</div>
                                      <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                      <i class="mdi mdi-flag ms-2 flag-color"></i>
                                    </div>
                                  </div>
                                </li>
                                <li class="d-block">
                                  <div class="form-check w-100">
                                    <label class="form-check-label">
                                      <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                    </label>
                                    <div class="d-flex mt-2">
                                      <div class="ps-4 text-small me-3">23 June 2020</div>
                                      <div class="badge badge-opacity-success me-3">Done</div>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="form-check w-100">
                                    <label class="form-check-label">
                                      <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                    </label>
                                    <div class="d-flex mt-2">
                                      <div class="ps-4 text-small me-3">24 June 2020</div>
                                      <div class="badge badge-opacity-success me-3">Done</div>
                                    </div>
                                  </div>
                                </li>
                                <li class="border-bottom-0">
                                  <div class="form-check w-100">
                                    <label class="form-check-label">
                                      <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                    </label>
                                    <div class="d-flex mt-2">
                                      <div class="ps-4 text-small me-3">24 June 2020</div>
                                      <div class="badge badge-opacity-danger me-3">Expired</div>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-4 grid-margin stretch-card">
                    <div class="card card-rounded">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                              <div>
                                <h4 class="card-title card-title-dash">Top Performer</h4>
                              </div>
                            </div>
                            <div class="mt-3">
                              <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                <div class="d-flex">
                                  <img class="img-sm rounded-10" src="assets/images/faces/face1.jpg" alt="profile">
                                  <div class="wrapper ms-3">
                                    <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                    <small class="text-muted mb-0">162543</small>
                                  </div>
                                </div>
                                <div class="text-muted text-small"> 1h ago </div>
                              </div>
                              <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                <div class="d-flex">
                                  <img class="img-sm rounded-10" src="assets/images/faces/face2.jpg" alt="profile">
                                  <div class="wrapper ms-3">
                                    <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                    <small class="text-muted mb-0">162543</small>
                                  </div>
                                </div>
                                <div class="text-muted text-small"> 1h ago </div>
                              </div>
                              <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                <div class="d-flex">
                                  <img class="img-sm rounded-10" src="assets/images/faces/face3.jpg" alt="profile">
                                  <div class="wrapper ms-3">
                                    <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                    <small class="text-muted mb-0">162543</small>
                                  </div>
                                </div>
                                <div class="text-muted text-small"> 1h ago </div>
                              </div>
                              <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                <div class="d-flex">
                                  <img class="img-sm rounded-10" src="assets/images/faces/face4.jpg" alt="profile">
                                  <div class="wrapper ms-3">
                                    <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                    <small class="text-muted mb-0">162543</small>
                                  </div>
                                </div>
                                <div class="text-muted text-small"> 1h ago </div>
                              </div>
                              <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                <div class="d-flex">
                                  <img class="img-sm rounded-10" src="assets/images/faces/face5.jpg" alt="profile">
                                  <div class="wrapper ms-3">
                                    <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                    <small class="text-muted mb-0">Alaska, USA</small>
                                  </div>
                                </div>
                                <div class="text-muted text-small"> 1h ago </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row flex-grow">
                  
                </div>
              </div>
            </div>

@endsection()