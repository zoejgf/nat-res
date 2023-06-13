<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->render($head_title,NULL,get_defined_vars(),0); ?>
    </head>
    <body id="body">
<!--  Maintenance Banner
<div class="alert alert-danger alert-dismissible show black" role="alert">
<button type="button" class="close text-right" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true" class="glyphicon glyphicon-remove black"></span>
</button>
<strong><i class="fa fa-comment-o"></i> This site is undergoing maintenance </strong>Some features may be temporarily disabled.
</div>-->
        <?php echo $this->render($nav,NULL,get_defined_vars(),0); ?>
            <div class="container-fluid">
                <div class="table-responsive split-top">
                    <table id="myTable" class="table table-bordered table-hover table-striped sortable" style="background-color: ghostwhite">
                        <?php if (isset($_SESSION['logged']) && $_SESSION['logged']['admin'] == 1): ?>
                                                    
                                <thead>
                                    <tr>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                        <th>Title</th>
                                        <th>Company</th>
                                        <th>Category</th>
                                        <th>Seasonal</th>
                                        <th>Position</th>
                                        <th>Paid</th>
                                        <th>Location</th>
                                        <th>Date Posted</th>
                                        <th>Expires</th>
                                      <th>Apply Now</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (($jobs?:[]) as $job): ?>
                                        <tr>
                                            <td id="delete" class="center-text"><a style="color:red;" href="<?= ($BASE) ?>/hide/<?= ($job['job_number']) ?>" target="_self"><i class="fa fa-scissors" aria-hidden="true"></i></a></td>
                                            <td class="center-text"><a class="edit-button-style" href="<?= ($BASE) ?>/edit/<?= ($job['job_number']) ?>" target="_self"><i class="fa fa-wrench" aria-hidden="true"></i></a></td>
                                            <td><?= ($job['job_title']) ?></td>
                                            <td><?= ($job['company_name']) ?></td>
                                            <td><?= ($job['catagory']) ?></td>
                                            <td><?= ($job['seasonal']) ?></td>
                                            <td><?= ($job['position']) ?></td>
                                            <td><?= ($job['paid']) ?></td>
                                            <td><?= ($job['location']) ?></td>
                                            <td><?= ($job['date']) ?></td>
                                            <td><?= ($job['expire']) ?></td>
                                            <td class="center-text"><a href="<?= ($job['url_link']) ?>" target="_blank"><i class="fa fa-chevron-up" aria-hidden="true"></i></a></td>
                                        </tr>                                    
                                     <?php endforeach; ?>
                                </tbody>                                
                            
                            <?php else: ?>                        
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Company</th>
                                        <th>Category</th>
                                        <th>Seasonal</th>
                                        <th>Position</th>
                                        <th>Paid</th>
                                        <th>Location</th>
                                        <th>Date Posted</th>
                                        <th>Expires</th>
                                        <th>Apply Now</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (($jobs?:[]) as $job): ?>
                                        <tr>
                                            <td><?= ($job['job_title']) ?></td>
                                            <td><?= ($job['company_name']) ?></td>
                                            <td><?= ($job['catagory']) ?></td>
                                            <td><?= ($job['seasonal']) ?></td>
                                            <td><?= ($job['position']) ?></td>
                                            <td><?= ($job['paid']) ?></td>
                                            <td><?= ($job['location']) ?></td>
                                            <td><?= ($job['date']) ?></td>
                                            <td><?= ($job['expire']) ?></td></a>
                                            <td class="center-text"><a href="<?= ($job['url_link']) ?>" target="_blank"><i class="fa fa-chevron-up" aria-hidden="true"></i></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>                                
                            
                        <?php endif; ?>
                    </table>
                    <?php if (isset($_SESSION['logged']) && isset($_SESSION['logged']['username'])): ?>
                        
                            <script type="text/javascript">
                            $(document).ready(function() {
                                $('#myTable').DataTable( {
                                "order": [[ 6, "desc" ]]
                                } );
                            } );
                            </script>
                        
                        <?php else: ?>
                            <script type="text/javascript">
                            //This initiates the table functionality (sort, search)
                            $(document).ready(function() {
                                $('#myTable').DataTable( {
                                    "order": [[ 4, "desc" ]]
                                } );
                            } );
                            </script>
                        
                        
                    <?php endif; ?>
                </div>
            </div>
        <footer>
            <?php echo $this->render($footer,NULL,get_defined_vars(),0); ?>   
        </footer>    
    </body>
</html>
