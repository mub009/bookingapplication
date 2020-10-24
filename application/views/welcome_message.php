<?php
/*
  Created on : May 6, 2019, 10:24:47 AM
  Author     : Shafeeque T P
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <div class="row">

        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body hgt310">
                    <h4 class="card-title">Mock Exams</h4>
                    <p class="card-description">

                        

                        <code>These are the exam(s) that can be taken right now</code>
                    </p>
                    <div class="table-responsive hgt280">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th>Sl No</th>
                                    <th>Title</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                if(empty($this->data['mock'])){
                                    ?>
                            <td colspan="4">Currently These is no exam(s) that can be taken right now</td>
                                <?php }
                                foreach ($this->data['mock'] as $row) {
                                    ?>
                                    <tr>
                                        <td class="text-center"><?= $i ?></td>
                                        <td><?= ucfirst($row->ex_title) ?></td>
                                        <td class="text-center"><?= $row->ex_duration ?></td>
                                        <td class="text-center">
                                            <a href="exam_intro/<?= $row->ex_id ?>" class="badge badge-danger">Start</a>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 center">
                    <a href="mockexams" class="btn btn-success mr-2">Show More</a>
                </div>

            </div>
        </div>

        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body hgt310">
                    <h4 class="card-title">Main Exams</h4>
                    <p class="card-description">

                        <code>These are the exam(s) that can be taken right now</code>
                    </p>
                    <div class="table-responsive hgt280">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th>Sl No</th>
                                    <th>Title</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                if(empty($this->data['main'])){
                                    ?>
                            <td colspan="4">Currently These is no exam(s) that can be taken right now</td>
                                <?php }
                                foreach ($this->data['main'] as $row) {
                                    ?>
                                    <tr>
                                        <td class="text-center"><?= $i ?></td>
                                        <td><?= ucfirst($row->ex_title) ?></td>
                                        <td class="text-center"><?= $row->ex_duration?></td>

                                        <td class="text-center">
                                            <?php if (!is_null($row->r_id)) { ?>
                                                <a  class="badge badge-danger">Attended</a>
                                            <?php } else { ?>
                                                <a href="exam_intro/<?= $row->ex_id ?>" class="badge badge-danger">Start</a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 center">
                    <a href="mainexams" class="btn btn-success mr-2">Show More</a></div>
            </div>
        </div>




        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Top Scored Exam</h4>


                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                       Exam Name
                                    </th>
                                    <th>
                                        <?= !is_null($this->data['top']->ex_id && !empty($this->data['top']->ex_id))? ucfirst($this->data['top']->ex_title):"" ?>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-weight-medium">
                                        Total Number of Question 
                                    </td>
                                    <td>
                                       <?= !is_null($this->data['top']->ex_id && !empty($this->data['top']->ex_id))? $this->data['top']->total_question :"" ?>
                                    </td>
                                </tr>

                               <tr>
                                    <td class="font-weight-medium">
                                        Total Mark 
                                    </td>
                                    <td>
                                       <?= !is_null($this->data['top']->ex_id && !empty($this->data['top']->ex_id)) ? $this->data['top']->total_question * 2 :"" ?>
                                    </td>
                                </tr>
                                

                                <tr>
                                    <td class="font-weight-medium">
                                        Date
                                    </td>
                                    <td>
                                        <?= !is_null($this->data['top']->ex_id && !empty($this->data['top']->ex_id))? date("d-m-Y h:i A",$this->data['top']->time):""  ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="font-weight-medium">
                                        Scored Mark
                                    </td>
                                    <td style="color: red;">
                                        <?= !is_null($this->data['top']->ex_id && !empty($this->data['top']->ex_id))? $this->data['top']->obtained_marks :"" ?>
                                    </td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Exam Wise Performance</h4>
                    <canvas id="lineChart" style="height:250px"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>

<style>.table td {
        padding: 11px 0px 11px 0px !important;
        vertical-align: top;
        border-top: 1px solid #f2f2f2;
        </style>
