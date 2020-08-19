<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte General</title>
<style>
 
 .col-md-12 {
    width: 100%;
} 

.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    background-color: #ECF0F5;
}

.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}

.box-header.with-border {
    border-bottom: 1px solid #f4f4f4;
}


.box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
}

.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;

}


.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #fff;
}


.table-bordered {
    border: 1px solid #f4f4f4;
}


.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
}

table {
    background-color: transparent;
}

 .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #f4f4f4;
}


.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px;
}

.bg-red {
    background-color: #dd4b39 !important;
}


</style>
	  
</head>
<body>

<div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Reporte General de Activos- <?=  $date; ?></h3>
                     <table class="table table-bordered">
                  <thead>
                    
                  </thead>
                    <tbody>
                  <?php foreach($data2 as $proyecto){ ?>
                 
                     <tr><th style="width: 40px">Codigo</th<td style="width: 10px" ><?= $proyecto->codigo; ?></td></tr>
                     <tr><th style="width: 40px">Organización</th><td><?= $proyecto->organizacion; ?></td></tr>
                     <tr><th style="width: 40px">Propietario</th><td><?= $proyecto->propietario; ?></td></tr>
                     <tr><th style="width: 40px">Versión</th><td><span class="badge bg-red"><?= $proyecto->version; ?></span></td>
                    </tr>
                    
                    <?php  } ?>
                    
                  </tbody>

                  </table>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                  <thead>
                     <tr>
                      <th style="width: 5px">id</th>
                      <th style="width: 20px">Nombre</th>
                      <th style="width: 20px">Amenazas</th>
                      <th style="width: 5px">Prob</th>
                       <th style="width: 5px">Prob re</th>
                      <th style="width: 5px">Deg</th>
                       <th style="width: 5px">Deg re</th>
                      
                     
                    </tr>
                  </thead>
                    <tbody>
                  <?php foreach($data as $activo){ ?>
                 
                    <tr>
                      <td style="width: 5px" ><?= $activo->Id; ?></td>
                      <td style="width: 20px"><?= $activo->Activo; ?></td>
                      <td style="width: 20px"><?= $activo->Amenaza; ?></td>
                      <td style="width: 5px" ><?= $activo->Probabilidad; ?></td>
                      <td style="width: 5px" ><?= $activo->Probre; ?></td>
                      <td style="width: 5px" ><?= ($activo->Degradacion/100); ?></td>
                      <td style="width: 5px" ><?= $activo->DegR; ?></td>
                      
                    </tr>
                    
                    <?php  } ?>
                    
                  </tbody>

                  </table>
                    
                     <table class="table table-bordered">
                  <thead>
                     <tr>
                      <th style="width: 5px">id</th>
                      <th style="width: 20px">Nombre</th>
                      <th style="width: 20px">Amenazas</th>
                      <th style="width: 5px">Imp</th>
                      <th style="width: 5px">Imp re</th>
                      <th style="width: 5px">Ri</th>
                      <th style="width: 5px">Ri re</th>
                     
                    </tr>
                  </thead>
                    <tbody>
                  <?php foreach($data as $activo){ ?>
                 
                    <tr>
                      <td style="width: 5px" ><?= $activo->Id; ?></td>
                      <td style="width: 20px"><?= $activo->Nombre; ?></td>
                      <td style="width: 20px"><?= $activo->Amenaza; ?></td>
                      <td style="width: 5px" ><?= $activo->Impacto; ?></td>
                      <td style="width: 5px" ><?= $activo->Impre; ?></td>
                      <td style="width: 5px" ><?= $activo->Riesgo; ?></td>
                      <td style="width: 5px" ><?= $activo->Rires; ?></td>
                      
                    </tr>
                    
                    <?php  } ?>
                    
                  </tbody>

                  </table>
                    
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              </div><!-- /.box -->

              
</div>

</body>
</html>


