<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte Por Activo</title>
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
                  
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                                      
                 
                    
                 <?php $n=1 ?>
                 <?php foreach($data as $activo){ ?>
                 
                 <h3 class="box-title" >Activo <?= $n; ?></h3>
                    
                  <table class="table table-bordered">
                  <thead>
                    
                  </thead>
                    <tbody>
                 
                 
                     <tr><th style="width: 5px">Nombre: </th<td style="width: 5px" ><?= $activo->Activo; ?></td></tr>
                     <tr><th style="width: 40px">Amenaza</th><td><?= $activo->Amenaza; ?></td></tr>
                     <tr><th style="width: 40px">Valoración</th><td style="width: 10px"><?= $activo->valoracion; ?></td></tr>
                     <tr><th style="width: 40px">Probabilidad</th><td bgcolor="red"><?= $activo->Probabilidad; ?></td></tr>
                     <tr><th style="width: 40px">Degradación</th><td bgcolor="red"><?= ($activo->Degradacion/100); ?></td></tr>
                     <tr><th style="width: 40px">Impacto</th><td bgcolor="red"><?= $activo->Impacto; ?></td></tr>
                     <tr><th style="width: 40px">Riesgo</th><td bgcolor="red"><?= $activo->Riesgo; ?></td></tr>
                     <tr><th style="width: 40px">Salvaguarda</th><td><?= $activo->Salvaguarda; ?></td></tr>
                     <tr><th style="width: 40px">Probabilidad Residual</th><td bgcolor="green"><?= $activo->Probre; ?></td></tr>
                     <tr><th style="width: 40px">Degradación Residual: </th<td style="width: 10px" bgcolor="green"><?= $activo->DegR; ?></td></tr>
                     <tr><th style="width: 40px">Impacto Residual</th><td bgcolor="green"><?= $activo->Impre; ?></td></tr>
                     <tr><th style="width: 40px">Riesgo Residual</th><td bgcolor="green"><?= $activo->Rires; ?></td></tr>
                  </tbody>

                  </table> 
                 
                        
                <h3 class="box-title" >Impacto</h3> 
                <table class="table table-bordered">
                    
                     <caption>Degradación</caption>  
                  <thead>
                     <tr>
                      <th style="width: 20px"></th>
                      <th style="width: 5px">0-20</th>
                      <th style="width: 20px">20-40</th>
                      <th style="width: 20px">40-60</th>
                      <th style="width: 5px">60-80</th>
                      <th style="width: 5px">80-100</th>
                      
                      
                     
                    </tr>
                  </thead>
                    <tbody>
                  
                 
                    <tr>
                      <th style="width: 5px">Extremo</th>
                      <td style="width: 5px" bgcolor="grey" value="1">Alto</td>
                      <td style="width: 20px" bgcolor="red" value="2">Muy Alto</td>
                      <td style="width: 20px" bgcolor="red" value="3">Extremo</td>
                      <td style="width: 5px" bgcolor="red" value="4">Extremo</td>
                      <td style="width: 5px" bgcolor="red" value="5">Extremo</td>
                   
                      
                    </tr>
                    <tr>
                      <th style="width: 5px">Muy Alto</th>
                      <td style="width: 5px" bgcolor="yellow" value="6">Medio</td>
                      <td style="width: 20px" bgcolor="orange" value="7">Alto</td>
                      <td style="width: 20px" bgcolor="red" value="8">Muy Alto</td>
                      <td style="width: 5px" bgcolor="red" value="9">Extremo</td>
                      <td style="width: 5px" bgcolor="red" value="10">Extremo</td>
                   
                      
                    </tr>
                    
                    <tr>
                      <th style="width: 5px">Alto</th>
                      <td style="width: 5px" bgcolor="green" value="11">Bajo</td>
                      <td style="width: 20px" bgcolor="yellow" value="12">Medio</td>
                      <td style="width: 20px" bgcolor="orange" value="13">Alto</td>
                      <td style="width: 5px" bgcolor="red" value="14">Muy Alto</td>
                      <td style="width: 5px" bgcolor="red" value="15">Extremo</td>
                   
                      
                    </tr>
                    
                    <tr>
                      <th style="width: 5px">Medio</th>
                      <td style="width: 5px" bgcolor="green" value="16">Bajo</td>
                      <td style="width: 20px" bgcolor="green" value="17">Bajo</td>
                      <td style="width: 20px" bgcolor="yellow" value="18">Medio</td>
                      <td style="width: 5px" bgcolor="orange" value="19">Alto</td>
                      <td style="width: 5px" bgcolor="red" value="20">Muy Alto</td>
                   
                      
                    </tr>
                    
                    <tr>
                      <th style="width: 5px">Bajo</th>
                      <td style="width: 5px" bgcolor="green" value="21">Bajo</td>
                      <td style="width: 20px" bgcolor="green" value="22">Bajo</td>
                      <td style="width: 20px" bgcolor="green" value="23">Bajo</td>
                      <td style="width: 5px" bgcolor="yellow" value="24">Medio</td>
                      <td style="width: 5px" bgcolor="orange" value="25">Alto</td>
                   
                      
                    </tr>
                
                    
                  </tbody>

                  </table>
               
                <h3 class="box-title" >Riesgo</h3> 
                <table class="table table-bordered">
                    
                  <caption>Probabilidad</caption>    
                  <thead>
                     <tr>
                      <th style="width: 20px"></th>
                      <th style="width: 5px">0-2</th>
                      <th style="width: 20px">3-4</th>
                      <th style="width: 20px">5-6</th>
                      <th style="width: 5px">7-8</th>
                      <th style="width: 5px">9-10</th>
                      
                      
                     
                    </tr>
                  </thead>
                    <tbody>
                  
                 
                    <tr>
                      <th style="width: 5px">Extremo</th>
                      <td style="width: 5px" bgcolor="orange">Alto</td>
                      <td style="width: 20px" bgcolor="red">Muy Alto</td>
                      <td style="width: 20px" bgcolor="red">Extremo</td>
                      <td style="width: 5px" bgcolor="red">Extremo</td>
                      <td style="width: 5px" bgcolor="red" >Extremo</td>
                   
                      
                    </tr>
                    <tr>
                      <th style="width: 5px">Muy Alto</th>
                      <td style="width: 5px" bgcolor="yellow">Medio</td>
                      <td style="width: 20px" bgcolor="orange">Alto</td>
                      <td style="width: 20px" bgcolor="red">Muy Alto</td>
                      <td style="width: 5px" bgcolor="grey">Extremo</td>
                      <td style="width: 5px" bgcolor="red" >Extremo</td>
                   
                      
                    </tr>
                    
                    <tr>
                      <th style="width: 5px">Alto</th>
                      <td style="width: 5px" bgcolor="green">Bajo</td>
                      <td style="width: 20px" bgcolor="yellow">Medio</td>
                      <td style="width: 20px" bgcolor="orange">Alto</td>
                      <td style="width: 5px" bgcolor="red">Muy Alto</td>
                      <td style="width: 5px" bgcolor="red" >Extremo</td>
                   
                      
                    </tr>
                    
                    <tr>
                      <th style="width: 5px">Medio</th>
                      <td style="width: 5px" bgcolor="green">Bajo</td>
                      <td style="width: 20px" bgcolor="green">Bajo</td>
                      <td style="width: 20px" bgcolor="yellow">Medio</td>
                      <td style="width: 5px" bgcolor="orange">Alto</td>
                      <td style="width: 5px" bgcolor="red" >Muy Alto</td>
                   
                      
                    </tr>
                    
                    <tr>
                      <th style="width: 5px">Bajo</th>
                      <td style="width: 5px" bgcolor="green">Bajo</td>
                      <td style="width: 20px" bgcolor="green">Bajo</td>
                      <td style="width: 20px" bgcolor="green">Bajo</td>
                      <td style="width: 5px" bgcolor="yellow">Medio</td>
                      <td style="width: 5px" bgcolor="orange" >Alto</td>
                   
                      
                    </tr>
                
                    
                  </tbody>

                  </table>
                <br></br>
                <br></br>
                <?php $n=$n+1; ?>
                <?php  } ?>
                
                    
             
              
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              </div><!-- /.box -->

              
</div>

</body>
</html>


