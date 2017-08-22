@extends ('backoffice/layout/app')

@section ('title') {{ $page_title }} @stop

@section ('content')

  <div class="row">
    <div class="col-lg-8">

        <div class="row">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>User project list</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-hover no-margins">
                            <thead>
                            <tr>
                                <th>Status</th>
                                <th>Date</th>
                                <th>User</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><small>Pending...</small></td>
                                <td><i class="fa fa-clock-o"></i> 11:20pm</td>
                                <td>Samantha</td>
                                <td class="text-navy"> <i class="fa fa-level-up"></i> 24% </td>
                            </tr>
                            <tr>
                                <td><span class="label label-warning">Canceled</span> </td>
                                <td><i class="fa fa-clock-o"></i> 10:40am</td>
                                <td>Monica</td>
                                <td class="text-navy"> <i class="fa fa-level-up"></i> 66% </td>
                            </tr>
                            <tr>
                                <td><small>Pending...</small> </td>
                                <td><i class="fa fa-clock-o"></i> 01:30pm</td>
                                <td>John</td>
                                <td class="text-navy"> <i class="fa fa-level-up"></i> 54% </td>
                            </tr>
                            <tr>
                                <td><small>Pending...</small> </td>
                                <td><i class="fa fa-clock-o"></i> 02:20pm</td>
                                <td>Agnes</td>
                                <td class="text-navy"> <i class="fa fa-level-up"></i> 12% </td>
                            </tr>
                            <tr>
                                <td><small>Pending...</small> </td>
                                <td><i class="fa fa-clock-o"></i> 09:40pm</td>
                                <td>Janet</td>
                                <td class="text-navy"> <i class="fa fa-level-up"></i> 22% </td>
                            </tr>
                            <tr>
                                <td><span class="label label-primary">Completed</span> </td>
                                <td><i class="fa fa-clock-o"></i> 04:10am</td>
                                <td>Amelia</td>
                                <td class="text-navy"> <i class="fa fa-level-up"></i> 66% </td>
                            </tr>
                            <tr>
                                <td><small>Pending...</small> </td>
                                <td><i class="fa fa-clock-o"></i> 12:08am</td>
                                <td>Damian</td>
                                <td class="text-navy"> <i class="fa fa-level-up"></i> 23% </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Small todo list</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <ul class="todo-list m-t small-list">
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                <span class="m-l-xs todo-completed">Buy a milk</span>

                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                <span class="m-l-xs">Go to shop and find some products.</span>

                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                <span class="m-l-xs">Send documents to Mike</span>
                                <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 mins</small>
                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                <span class="m-l-xs">Go to the doctor dr Smith</span>
                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                <span class="m-l-xs todo-completed">Plan vacation</span>
                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                <span class="m-l-xs">Create new stuff</span>
                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                <span class="m-l-xs">Call to Anna for dinner</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Transactions worldwide</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="row">
                            <div class="col-lg-6">
                                <table class="table table-hover margin bottom">
                                    <thead>
                                    <tr>
                                        <th style="width: 1%" class="text-center">No.</th>
                                        <th>Transaction</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td> Security doors
                                            </td>
                                        <td class="text-center small">16 Jun 2014</td>
                                        <td class="text-center"><span class="label label-primary">$483.00</span></td>

                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td> Wardrobes
                                        </td>
                                        <td class="text-center small">10 Jun 2014</td>
                                        <td class="text-center"><span class="label label-primary">$327.00</span></td>

                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td> Set of tools
                                        </td>
                                        <td class="text-center small">12 Jun 2014</td>
                                        <td class="text-center"><span class="label label-warning">$125.00</span></td>

                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td> Panoramic pictures</td>
                                        <td class="text-center small">22 Jun 2013</td>
                                        <td class="text-center"><span class="label label-primary">$344.00</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td>Phones</td>
                                        <td class="text-center small">24 Jun 2013</td>
                                        <td class="text-center"><span class="label label-primary">$235.00</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td>Monitors</td>
                                        <td class="text-center small">26 Jun 2013</td>
                                        <td class="text-center"><span class="label label-primary">$100.00</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-6">
                                <div id="world-map" style="height: 300px;"></div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

      <div class="col-lg-2">
          <div class="ibox float-e-margins">
              <div class="ibox-title">
                  <span class="label label-success pull-right">Monthly</span>
                  <h5>Views</h5>
              </div>
              <div class="ibox-content">
                  <h1 class="no-margins">386,200</h1>
                  <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                  <small>Total views</small>
              </div>
          </div>
      </div>
      <div class="col-lg-2">
          <div class="ibox float-e-margins">
              <div class="ibox-title">
                  <span class="label label-info pull-right">Annual</span>
                  <h5>Orders</h5>
              </div>
              <div class="ibox-content">
                  <h1 class="no-margins">80,800</h1>
                  <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                  <small>New orders</small>
              </div>
          </div>
      </div>

      <div class="col-lg-4">
          <div class="ibox float-e-margins">
              <div class="ibox-title">
                  <span class="label label-primary pull-right">Today</span>
                  <h5>visits</h5>
              </div>
              <div class="ibox-content">

                  <div class="row">
                      <div class="col-md-6">
                          <h1 class="no-margins">406,42</h1>
                          <div class="font-bold text-navy">44% <i class="fa fa-level-up"></i> <small>Rapid pace</small></div>
                      </div>
                      <div class="col-md-6">
                          <h1 class="no-margins">206,12</h1>
                          <div class="font-bold text-navy">22% <i class="fa fa-level-up"></i> <small>Slow pace</small></div>
                      </div>
                  </div>


              </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="ibox float-e-margins">
              <div class="ibox-title">
                  <h5>Messages</h5>
                  <div class="ibox-tools">
                      <a class="collapse-link">
                          <i class="fa fa-chevron-up"></i>
                      </a>
                      <a class="close-link">
                          <i class="fa fa-times"></i>
                      </a>
                  </div>
              </div>
              <div class="ibox-content ibox-heading">
                  <h3><i class="fa fa-envelope-o"></i> New messages</h3>
                  <small><i class="fa fa-tim"></i> You have 22 new messages and 16 waiting in draft folder.</small>
              </div>
              <div class="ibox-content">
                  <div class="feed-activity-list">

                      <div class="feed-element">
                          <div>
                              <small class="pull-right text-navy">1m ago</small>
                              <strong>Monica Smith</strong>
                              <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                              <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                          </div>
                      </div>

                      <div class="feed-element">
                          <div>
                              <small class="pull-right">2m ago</small>
                              <strong>Jogn Angel</strong>
                              <div>There are many variations of passages of Lorem Ipsum available</div>
                              <small class="text-muted">Today 2:23 pm - 11.06.2014</small>
                          </div>
                      </div>

                      <div class="feed-element">
                          <div>
                              <small class="pull-right">5m ago</small>
                              <strong>Jesica Ocean</strong>
                              <div>Contrary to popular belief, Lorem Ipsum</div>
                              <small class="text-muted">Today 1:00 pm - 08.06.2014</small>
                          </div>
                      </div>

                      <div class="feed-element">
                          <div>
                              <small class="pull-right">5m ago</small>
                              <strong>Monica Jackson</strong>
                              <div>The generated Lorem Ipsum is therefore </div>
                              <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                          </div>
                      </div>


                      <div class="feed-element">
                          <div>
                              <small class="pull-right">5m ago</small>
                              <strong>Anna Legend</strong>
                              <div>All the Lorem Ipsum generators on the Internet tend to repeat </div>
                              <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                          </div>
                      </div>
                      <div class="feed-element">
                          <div>
                              <small class="pull-right">5m ago</small>
                              <strong>Damian Nowak</strong>
                              <div>The standard chunk of Lorem Ipsum used </div>
                              <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                          </div>
                      </div>
                      <div class="feed-element">
                          <div>
                              <small class="pull-right">5m ago</small>
                              <strong>Gary Smith</strong>
                              <div>200 Latin words, combined with a handful</div>
                              <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>


  </div>

@endsection
