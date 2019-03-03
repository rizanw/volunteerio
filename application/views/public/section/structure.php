<section id="Structure">
  <div class="container">
    <h1 align="center">Our Structure</h1>
        <div id="wrapper">
        <div id="container">
            <ol class="organizational-chart">
                <li>
                    <div class="coor zoom-org" type="button" data-toggle="modal" data-target="#kezia" style="background-color: #C70039">
                        <h1>Kezia Dewi Rona Liemen</h1>
                        <span>Volunteer's Coordinator</span>
                    </div>
                    <ol>
                        <li>
                            <div class="hospit coor zoom-org" type="button" data-toggle="modal" data-target="#iman">
                                <h2>Imanuel Berin</h2>
                                <span>Hospit's Coordinator</span>
                            </div>
                            <ol>
                                <li>
                                    <div class="hospit coor zoom-org" type="button" data-toggle="modal" data-target="#nindy">
                                        <h4>Anindya Noviyanti Kiswiyanto</h4>
                                        <span>Hospit's Vice Coordinator</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="hospit-m coor zoom-org" type="button" data-toggle="modal" data-target=".members-h">
                                        <h4>Hospit's Members</h4>
                                    </div>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <div class="id-col coor zoom-org" type="button" data-toggle="modal" data-target="#theja">
                                <h2>Steven Theja</h2>
                                <span>ID's Coordinator</span>
                            </div>
                            <ol>
                                <li>
                                    <div class="id-col coor zoom-org" type="button" data-toggle="modal" data-target="#nuril">
                                        <h4>Nuril Hidayati</h4>
                                        <span>ID's Vice Coordinator</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="id-col-m coor zoom-org" type="button" data-toggle="modal" data-target=".members-id">
                                        <h4>ID's Members</h4>
                                    </div>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <div class="medfo coor zoom-org" type="button" data-toggle="modal" data-target="#andrew">
                                <h2>Christopher Andrew</h2>
                                <span>Medfo's Coordinator</span>
                            </div>
                            <ol>
                                <li>
                                    <div class="medfo coor zoom-org" type="button" data-toggle="modal" data-target="#chansu">
                                        <h4>Chandra Adiwijaya</h4>
                                        <span>Medfo's Vice Coordinator</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="medfo coor zoom-org type="button" data-toggle="modal" data-target="#lia">
                                        <h4>Nisrina Kamilia Salsabila</h4>
                                        <span>Medfo's Vice Coordinator 2</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="medfo-m coor zoom-org" type="button" data-toggle="modal" data-target=".members-m"> 
                                        <h4>Medfo's Members</h4>
                                    </div>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </li>
            </ol>

        </div>
    </div>
    </div>
  </div>
</section>

<!--modal list volunteer-->
<div class="modal fade bd-example-modal-lg members-m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Media & Information Members</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-medfo">
        <div class="table-responsive">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Department</th>
                  <th scope="col">Season</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if($fetch_medfo->num_rows()>0){ $i = 1;
                    foreach ($fetch_medfo->result() as $row) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $i++; ?></th>
                        <td><?php echo $row->volunteer_name; ?></td>
                        <td><?php echo $row->volunteer_department; ?></td>
                        <td><?php echo $row->volunteer_season; ?></td>
                    </tr>
                <?php
                    }
                }else{?>
                    <tr>
                        <td colspan="6" style="text-align: center; background: grey; opacity: 20%">
                            No Volunteer!
                        </td>
                    </tr>
                <?php
                }
                ?>          
              </tbody>
            </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg members-id" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Internationalization & Development Members</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-id">
        <div class="table-responsive">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Department</th>
                  <th scope="col">Season</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if($fetch_idd->num_rows()>0){ $i = 1;
                    foreach ($fetch_idd->result() as $row) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $i++; ?></th>
                        <td><?php echo $row->volunteer_name; ?></td>
                        <td><?php echo $row->volunteer_department; ?></td>
                        <td><?php echo $row->volunteer_season; ?></td>
                    </tr>
                <?php
                    }
                }else{?>
                    <tr>
                        <td colspan="6" style="text-align: center; background: grey; opacity: 20%">
                            No Volunteer!
                        </td>
                    </tr>
                <?php
                }
                ?>          
              </tbody>
            </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg members-h" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hospitality Members</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-hospit">
        <div class="table-responsive">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Department</th>
                  <th scope="col">Season</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if($fetch_hospit->num_rows()>0){ $i = 1;
                    foreach ($fetch_hospit->result() as $row) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $i++; ?></th>
                        <td><?php echo $row->volunteer_name; ?></td>
                        <td><?php echo $row->volunteer_department; ?></td>
                        <td><?php echo $row->volunteer_season; ?></td>
                    </tr>
                <?php
                    }
                }else{?>
                    <tr>
                        <td colspan="6" style="text-align: center; background: grey; opacity: 20%">
                            No Volunteer!
                        </td>
                    </tr>
                <?php
                }
                ?>          
              </tbody>
            </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg" id="kezia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Volunteer's Coordinator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img style="display: table;margin: 0 auto;" src="<?php echo base_url().'asset/img/nc/kezia.png';?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg" id="iman" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hospit's Coordinator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img style="display: table;margin: 0 auto;" src="<?php echo base_url().'asset/img/nc/iman.png';?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg" id="nindy" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hospit's Vice Coordinator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img style="display: table;margin: 0 auto;" src="<?php echo base_url().'asset/img/nc/nindy.png';?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg" id="theja" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">ID's Coordinator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img style="display: table;margin: 0 auto;" src="<?php echo base_url().'asset/img/nc/steven.png';?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg" id="nuril" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">ID's Vice Coordinator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img style="display: table;margin: 0 auto;" src="<?php echo base_url().'asset/img/nc/nuril.png';?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg" id="andrew" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Medfo's Coordinator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img style="display: table;margin: 0 auto;" src="<?php echo base_url().'asset/img/nc/andrew.png';?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg" id="chansu" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Medfo's Vice Coordinator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img style="display: table;margin: 0 auto;" src="<?php echo base_url().'asset/img/nc/chan.png';?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg" id="lia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Medfo's Vice Coordinator 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img style="display: table;margin: 0 auto;" src="<?php echo base_url().'asset/img/nc/lia.png';?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

