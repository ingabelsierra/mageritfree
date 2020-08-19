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
                
                <?php  
                
                $extremo = array('orange','red','red','red','red');
                
                $muyalto = array('yellow','orange','red','red','red');
                
                $alto = array('green','yellow','orange','red','red');
                
                $medio = array('green','green','yellow','orange','red');
                
                $bajo = array('green','green','green','yellow','orange');
                
                if($activo->Impre>0 &&$activo->Impre<2)
                    $impactor="Bajo";
                
                if($activo->Impre>=2 &&$activo->Impre<6)
                    $impactor="Medio"; 
                
                if($activo->Impre>=6 &&$activo->Impre<8)
                    $impactor="Alto";
                
                if($activo->Impre>=9 &&$activo->Impre<10)
                    $impactor="Muy Alto";
                
                if($activo->Impre=10)
                    $impactor="Extremo";
                ?> 
                    
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
                      <td style="width: 5px" <?php if($activo->valoracion=="Extremo" && $activo->Degradacion>0 && $activo->Degradacion<20) 
                                                      {
                                                       $extremo[0]="blue"; 
                                                       $impacto="Alto";
                                                      
                                                      }
                                                      
                                                      if($activo->valoracion=="Extremo" && $activo->DegR>0 && $activo->DegR<20) 
                                                          {
                                                           $extremo[0]="grey"; 
                                                           $impacto="Alto";
                                                           
                                                          }
                                                      
                                                      ?> bgcolor="<?= $extremo[0]?>" >Alto</td>
                      <td style="width: 20px" <?php if($activo->valoracion=="Extremo" && $activo->Degradacion>=20 && $activo->Degradacion<40)
                                                       { 
                                                        $extremo[1]="blue"; 
                                                        $impacto="Muy Alto"; 
                                                        
                                                       }
                                                       
                                                       if($activo->valoracion=="Extremo" && $activo->DegR>=20 && $activo->DegR<40)
                                                       { 
                                                        $extremo[1]="grey"; 
                                                        $impacto="Muy Alto"; 
                                                        
                                                       }
                                                       ?> bgcolor="<?= $extremo[1]?>" >Muy Alto</td>
                      <td style="width: 20px" <?php if($activo->valoracion=="Extremo" && $activo->Degradacion>=40 && $activo->Degradacion<60) 
                                                       {
                                                        $extremo[2]="blue"; 
                                                        $impacto="Extremo";
                                                        
                                                       }
                                                       
                                                       if($activo->valoracion=="Extremo" && $activo->DegR>=40 && $activo->DegR<60) 
                                                       {
                                                        $extremo[2]="grey"; 
                                                        $impacto="Extremo";
                                                        
                                                       }
                                                       
                                                       ?> bgcolor="<?= $extremo[2]?>" >Extremo</td>
                      <td style="width: 5px" <?php if($activo->valoracion=="Extremo" && $activo->Degradacion>=60 && $activo->Degradacion<80) 
                                                      {
                                                       $extremo[3]="blue"; 
                                                       $impacto="Extremo";
                                                       
                                                      }
                                                      if($activo->valoracion=="Extremo" && $activo->DegR>=60 && $activo->DegR<80) 
                                                      {
                                                       $extremo[3]="blue"; 
                                                       $impacto="Extremo";
                                                       
                                                      }
                                                      ?> bgcolor="<?= $extremo[3]?>" >Extremo</td>
                      <td style="width: 5px" <?php if($activo->valoracion=="Extremo" && $activo->Degradacion>=80 && $activo->Degradacion<=100) 
                                                      {
                                                       $extremo[4]="blue";
                                                       $impacto="Extremo";
                                                       
                                                      } 
                                                      
                                                      if($activo->valoracion=="Extremo" && $activo->DegR>=80 && $activo->DegR<=100) 
                                                      {
                                                       $extremo[4]="grey";
                                                       $impacto="Extremo";
                                                       
                                                      }
                                                      ?> bgcolor="<?= $extremo[4]?>" >Extremo</td>
                   
                      
                    </tr>
                    <tr>
                      <th style="width: 5px">Muy Alto</th>
                      <td style="width: 5px" <?php if($activo->valoracion=="Muy Alto" && $activo->Degradacion>0 && $activo->Degradacion<20) 
                                                      {
                                                       $muyalto[0]="blue"; 
                                                       $impacto="Medio";
                                                       
                                                      }
                                                      if($activo->valoracion=="Muy Alto" && $activo->DegR>0 && $activo->DegR<20) 
                                                      {
                                                       $muyalto[0]="grey"; 
                                                       $impacto="Medio";
                                                       
                                                      }
                                                      ?> bgcolor="<?= $muyalto[0]?>">Medio</td>
                 <td style="width: 20px" <?php if($activo->valoracion=="Muy Alto" && $activo->Degradacion>=20 && $activo->Degradacion<40) 
                                                  {
                                                   $muyalto[1]="blue";
                                                   $impacto="Alto";
                                                   
                                                  }
                                                  if($activo->valoracion=="Muy Alto" && $activo->DegR>=20 && $activo->DegR<40) 
                                                  {
                                                   $muyalto[1]="grey";
                                                   $impacto="Alto";
                                                   
                                                  }
                                                  ?> bgcolor="<?= $muyalto[1]?>" >Alto</td>
                      <td style="width: 20px" <?php if($activo->valoracion=="Muy Alto" && $activo->Degradacion>=40 && $activo->Degradacion<60) 
                                                       {
                                                        $muyalto[2]="blue";
                                                        $impacto="Muy Alto";
                                                        
                                                       }
                                                       if($activo->valoracion=="Muy Alto" && $activo->DegR>=40 && $activo->DegR<60) 
                                                       {
                                                        $muyalto[2]="grey";
                                                        $impacto="Muy Alto";
                                                        
                                                       }
                                                       ?> bgcolor="<?= $muyalto[2]?>" >Muy Alto</td>
                      <td style="width: 5px" <?php if($activo->valoracion=="Muy Alto" && $activo->Degradacion>=60 && $activo->Degradacion<80) 
                                                      {
                                                       $muyalto[3]="blue";
                                                       $impacto="Extremo";
                                                       
                                                      }
                                                      if($activo->valoracion=="Muy Alto" && $activo->DegR>=60 && $activo->DegR<80) 
                                                      {
                                                       $muyalto[3]="grey";
                                                       $impacto="Extremo";
                                                       
                                                      }
                                                      ?> bgcolor="<?= $muyalto[3]?>">Extremo</td>
                      <td style="width: 5px"  <?php if($activo->valoracion=="Muy Alto" && $activo->Degradacion>=80 && $activo->Degradacion<=100) 
                                                       {
                                                        $muyalto[4]="blue";
                                                        $impacto="Extremo";
                                                        
                                                       }
                                                       if($activo->valoracion=="Muy Alto" && $activo->DegR>=80 && $activo->DegR<=100) 
                                                       {
                                                        $muyalto[4]="blue";
                                                        $impacto="Extremo";
                                                        
                                                       }
                                                       ?> bgcolor="<?= $muyalto[4]?>">Extremo</td>
                   
                      
                    </tr>
                    
                    <tr>
                      <th style="width: 5px">Alto</th>
                      <td style="width: 5px" <?php if($activo->valoracion=="Alto" && $activo->Degradacion>0 && $activo->Degradacion<20) 
                                                      {
                                                       $alto[0]="blue";
                                                       $impacto="Bajo";
                                                       
                                                      }
                                                      if($activo->valoracion=="Alto" && $activo->DegR>0 && $activo->DegR<20) 
                                                      {
                                                       $alto[0]="grey";
                                                       $impacto="Bajo";
                                                       
                                                      }
                                                      ?> bgcolor="<?= $alto[0]?>">Bajo</td>
                      <td style="width: 20px" <?php if($activo->valoracion=="Alto" && $activo->Degradacion>=20 && $activo->Degradacion<40) 
                                                       {
                                                        $alto[1]="blue";
                                                        $impacto="Medio";
                                                        
                                                       }
                                                       if($activo->valoracion=="Alto" && $activo->DegR>=20 && $activo->DegR<40) 
                                                       {
                                                        $alto[1]="grey";
                                                        $impacto="Medio";
                                                        
                                                       }
                                                       ?> bgcolor="<?= $alto[1]?>">Medio</td>
                      <td style="width: 20px"  <?php if($activo->valoracion=="Alto" && $activo->Degradacion>=40 && $activo->Degradacion<60) 
                                                       {
                                                        $alto[2]="blue";
                                                        $impacto="Alto";
                                                        
                                                       }
                                                       if($activo->valoracion=="Alto" && $activo->DegR>=40 && $activo->DegR<60) 
                                                       {
                                                        $alto[2]="grey";
                                                        $impacto="Alto";
                                                        
                                                       }
                                                       ?> bgcolor="<?= $muyalto[2]?>" bgcolor="<?= $alto[2]?>">Alto</td>
                      <td style="width: 5px" <?php if($activo->valoracion=="Alto" && $activo->Degradacion>=60 && $activo->Degradacion<80) 
                                                      {
                                                       $alto[3]="blue";
                                                       $impacto="Muy Alto";
                                                       
                                                      }
                                                      if($activo->valoracion=="Alto" && $activo->DegR>=60 && $activo->DegR<80) 
                                                      {
                                                       $alto[3]="grey";
                                                       $impacto="Muy Alto";
                                                       
                                                      }
                                                      ?> bgcolor="<?= $muyalto[3]?>" bgcolor="<?= $alto[3]?>">Muy Alto</td>
                      <td style="width: 5px" <?php if($activo->valoracion=="Alto" && $activo->Degradacion>=80 && $activo->Degradacion<=100) 
                                                      {
                                                       $alto[4]="blue";
                                                       $impacto="Extremo";
                                                       
                                                      }
                                                      if($activo->valoracion=="Alto" && $activo->DegR>=80 && $activo->DegR<=100) 
                                                      {
                                                       $alto[4]="grey";
                                                       $impacto="Extremo";
                                                       
                                                      }
                                                      ?>  bgcolor="<?= $alto[4]?>" >Extremo</td>
                   
                      
                    </tr>
                    
                    <tr>
                      <th style="width: 5px">Medio</th>
                      <td style="width: 5px" <?php if($activo->valoracion=="Medio" && $activo->Degradacion>0 && $activo->Degradacion<20) 
                                                     {
                                                      $medio[0]="blue"; 
                                                      $impacto="Bajo";
                                                      
                                                     }
                                                     if($activo->valoracion=="Medio" && $activo->DegR>0 && $activo->DegR<20) 
                                                     {
                                                      $medio[0]="grey"; 
                                                      $impacto="Bajo";
                                                      
                                                     }
                                                     ?> bgcolor="<?= $medio[0]?>" >Bajo</td>
                      <td style="width: 20px" <?php if($activo->valoracion=="Medio" && $activo->Degradacion>=20 && $activo->Degradacion<40) 
                                                       {
                                                        $medio[1]="blue"; 
                                                        $impacto="Bajo";
                                                        
                                                       }
                                                       if($activo->valoracion=="Medio" && $activo->DegR>=20 && $activo->DegR<40) 
                                                       {
                                                        $medio[1]="grey"; 
                                                        $impacto="Bajo";
                                                        
                                                       }
                                                       ?> bgcolor="<?= $medio[1]?>" >Bajo</td>
                      <td style="width: 20px" <?php if($activo->valoracion=="Medio" && $activo->Degradacion>=40 && $activo->Degradacion<60) 
                                                       {
                                                        $medio[2]="blue"; 
                                                        $impacto="Medio";
                                                        
                                                        }
                                                       if($activo->valoracion=="Medio" && $activo->DegR>=40 && $activo->DegR<60) 
                                                       {
                                                        $medio[2]="grey"; 
                                                        $impacto="Medio";
                                                        
                                                        }
                                                        ?> bgcolor="<?= $medio[2]?>" >Medio</td>
                      <td style="width: 5px" <?php if($activo->valoracion=="Medio" && $activo->Degradacion>=60 && $activo->Degradacion<80) 
                                                      {
                                                       $medio[3]="blue"; 
                                                       $impacto="Alto";
                                                       
                                                      }
                                                      if($activo->valoracion=="Medio" && $activo->DegR>=60 && $activo->DegR<80) 
                                                      {
                                                       $medio[3]="grey"; 
                                                       $impacto="Alto";
                                                       
                                                      }
                                                      ?> bgcolor="<?= $medio[3]?>" >Alto</td>
                      <td style="width: 5px" <?php if($activo->valoracion=="Medio" && $activo->Degradacion>=80 && $activo->Degradacion<=100) 
                                                      {
                                                       $medio[4]="blue"; 
                                                       $impacto="Muy Alto";
                                                       
                                                      }
                                                      if($activo->valoracion=="Medio" && $activo->DegR>=80 && $activo->DegR<=100) 
                                                      {
                                                       $medio[4]="grey"; 
                                                       $impacto="Muy Alto";
                                                       
                                                      }
                                                      ?> bgcolor="<?= $medio[4]?>" >Muy Alto</td>
                   
                      
                    </tr>
                    
                    <tr>
                      <th style="width: 5px">Bajo</th>
                      <td style="width: 5px" <?php if($activo->valoracion=="Bajo" && $activo->Degradacion>0 && $activo->Degradacion<20) 
                                                      {
                                                       $bajo[0]="blue"; 
                                                       $impacto="Bajo";
                                                       
                                                      }
                                                      if($activo->valoracion=="Bajo" && $activo->DegR>0 && $activo->DegR<20) 
                                                      {
                                                       $bajo[0]="grey"; 
                                                       $impacto="Bajo";
                                                       
                                                      }
                                                      ?> bgcolor="<?= $bajo[0]?>" >Bajo</td>
                      <td style="width: 20px" <?php if($activo->valoracion=="Bajo" && $activo->Degradacion>=20 && $activo->Degradacion<40) 
                                                       {
                                                        $bajo[1]="blue"; 
                                                        $impacto="Bajo";
                                                        
                                                       }
                                                       if($activo->valoracion=="Bajo" && $activo->DegR>=20 && $activo->DegR<40) 
                                                       {
                                                        $bajo[1]="grey"; 
                                                        $impacto="Bajo";
                                                        
                                                       }
                                                       ?> bgcolor="<?= $bajo[1]?>" >Bajo</td>
                      <td style="width: 20px" <?php if($activo->valoracion=="Bajo" && $activo->Degradacion>=40 && $activo->Degradacion<60) 
                                                       {
                                                        $bajo[2]="blue"; 
                                                        $impacto="Bajo";
                                                        
                                                       }
                                                       if($activo->valoracion=="Bajo" && $activo->DegR>=40 && $activo->DegR<60) 
                                                       {
                                                        $bajo[2]="grey"; 
                                                        $impacto="Bajo";
                                                        
                                                       }
                                                       ?> bgcolor="<?= $bajo[2]?>" >Bajo</td>
                      <td style="width: 5px" <?php if($activo->valoracion=="Bajo" && $activo->Degradacion>=60 && $activo->Degradacion<80) 
                                                      {
                                                       $bajo[3]="blue"; 
                                                       $impacto="Medio";
                                                       
                                                      }
                                                      if($activo->valoracion=="Bajo" && $activo->DegR>=60 && $activo->DegR<80) 
                                                      {
                                                       $bajo[3]="grey"; 
                                                       $impacto="Medio";
                                                       
                                                      }
                                                      ?> bgcolor="<?= $bajo[3]?>" >Medio</td>
                      <td style="width: 5px" <?php if($activo->valoracion=="Bajo" && $activo->Degradacion>=80 && $activo->Degradacion<=100) 
                                                      {
                                                       $bajo[4]="blue"; 
                                                       $impacto="Alto";
                                                       
                                                      }
                                                      if($activo->valoracion=="Bajo" && $activo->DegR>=80 && $activo->DegR<=100) 
                                                      {
                                                       $bajo[4]="blue"; 
                                                       $impacto="Alto";
                                                       
                                                      }
                                                      ?> bgcolor="<?= $bajo[4]?>" >Alto</td>
                   
                      
                    </tr>
                
                    
                  </tbody>

                  </table>
                
                 <?php  
                
                $extremo = array('orange','red','red','red','red');
                
                $muyalto = array('yellow','orange','red','red','red');
                
                $alto = array('green','yellow','orange','red','red');
                
                $medio = array('green','green','yellow','orange','red');
                
                $bajo = array('green','green','green','yellow','orange');
                  
                ?>
              
              
                
             <h3 class="box-title" >Riesgo</h3> 
             <table class="table table-bordered">
                    
                     <caption>Probabilidad</caption>  
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
                      <td style="width: 5px" <?php if($impacto=="Extremo" && $activo->Probabilidad>0 && $activo->Probabilidad<20) 
                                                      $extremo[0]="blue";
                      
                                                   if($impactor=="Extremo" && $activo->Probre>0 && $activo->Probre<20) 
                                                      $extremo[0]="grey";
                                                   
                                                      ?> bgcolor="<?= $extremo[0]?>" >Alto</td>
                      <td style="width: 20px" <?php if($impacto=="Extremo" && $activo->Probabilidad>=20 && $activo->Probabilidad<40) 
                                                       $extremo[1]="blue";
                                                    
                                                    if($impactor=="Extremo" && $activo->Probre>=20 && $activo->Probre<40) 
                                                       $extremo[1]="grey";
                                                    
                                                    ?> bgcolor="<?= $extremo[1]?>" >Muy Alto</td>
                      <td style="width: 20px" <?php if($impacto=="Extremo" && $activo->Probabilidad>=40 && $activo->Probabilidad<60) 
                                                       $extremo[2]="blue";
                      
                                                    if($impactor=="Extremo" && $activo->Probre>=40 && $activo->Probre<60) 
                                                       $extremo[2]="grey";
                                                    
                                                    ?> bgcolor="<?= $extremo[2]?>" >Extremo</td>
                      <td style="width: 5px" <?php if($impacto=="Extremo" && $activo->Probabilidad>=60 && $activo->Probabilidad<80) 
                                                      $extremo[3]="blue";
                      
                                                   if($impactor=="Extremo" && $activo->Probre>=60 && $activo->Probre<80) 
                                                      $extremo[3]="grey";
                                                   
                                                   ?> bgcolor="<?= $extremo[3]?>" >Extremo</td>
                      <td style="width: 5px" <?php if($impacto=="Extremo" && $activo->Probabilidad>=80 && $activo->Probabilidad<=100) 
                                                      $extremo[4]="blue";
                      
                                                   if($impactor=="Extremo" && $activo->Probre>=80 && $activo->Probre<=100) 
                                                      $extremo[4]="grey";
                                                   
                                                   ?> bgcolor="<?= $extremo[4]?>" >Extremo</td>
                   
                      
                    </tr>
                    <tr>
                      <th style="width: 5px">Muy Alto</th>
                      <td style="width: 5px" <?php if($impacto=="Muy Alto" && $activo->Probabilidad>0 && $activo->Probabilidad<20) 
                                                      $muyalto[0]="blue";
                      
                                                   if($impactor=="Muy Alto" && $activo->Probre>0 && $activo->Probre<20) 
                                                      $muyalto[0]="grey";
                                                   
                                                   ?> bgcolor="<?= $muyalto[0]?>" value="6">Medio</td>
                      <td style="width: 20px" <?php if($impacto=="Muy Alto" && $activo->Probabilidad>=20 && $activo->Probabilidad<40) 
                                                       $muyalto[1]="blue";
                      
                                                    if($impactor=="Muy Alto" && $activo->Probre>=20 && $activo->Probre<40) 
                                                       $muyalto[1]="grey";
                                                    
                                              ?> bgcolor="<?= $muyalto[1]?>" value="7">Alto</td>
                      <td style="width: 20px" <?php if($impacto=="Muy Alto" && $activo->Probabilidad>=40 && $activo->Probabilidad<60) 
                                                       $muyalto[2]="blue";
                      
                                                    if($impactor=="Muy Alto" && $activo->Probre>=40 && $activo->Probre<60) 
                                                       $muyalto[2]="blue";
                                                    
                                                    ?> bgcolor="<?= $muyalto[2]?>" value="8">Muy Alto</td>
                      <td style="width: 5px" <?php if($impacto=="Muy Alto" && $activo->Probabilidad>=60 && $activo->Probabilidad<80) 
                                                      $muyalto[3]="blue";
                      
                                                   if($impactor=="Muy Alto" && $activo->Probre>=60 && $activo->Probre<80) 
                                                      $muyalto[3]="grey";
                                                   
                                                   ?> bgcolor="<?= $muyalto[3]?>" value="9">Extremo</td>
                      <td style="width: 5px"  <?php if($impacto=="Muy Alto" && $activo->Probabilidad>=80 && $activo->Probabilidad<=100) 
                                                       $muyalto[4]="blue";
                      
                                                    if($impactor=="Muy Alto" && $activo->Probre>=80 && $activo->Probre<=100) 
                                                       $muyalto[4]="grey";
                                                    
                                                    ?> bgcolor="<?= $muyalto[4]?>" value="10">Extremo</td>
                   
                      
                    </tr>
                    
                    <tr>
                      <th style="width: 5px">Alto</th>
                      <td style="width: 5px" <?php if($impacto=="Alto" && $activo->Probabilidad>0 && $activo->Probabilidad<20) 
                                                      $alto[0]="blue";
                      
                                                   if($impactor=="Alto" && $activo->Probre>0 && $activo->Probre<20) 
                                                      $alto[0]="grey";
                                                   
                                             ?> bgcolor="<?= $alto[0]?>">Bajo</td>
                      <td style="width: 20px" <?php if($impacto=="Alto" && $activo->Probabilidad>=20 && $activo->Probabilidad<40) 
                                                       $alto[1]="blue";
                      
                                                    if($impactor=="Alto" && $activo->Probre>=20 && $activo->Probre<40) 
                                                       $alto[1]="grey";
                                                    
                                              ?> bgcolor="<?= $alto[1]?>" >Medio</td>
                      <td style="width: 20px"  <?php if($impacto=="Alto" && $activo->Probabilidad>=40 && $activo->Probabilidad<60) 
                                                        $alto[2]="blue";
                      
                                                     if($impactor=="Alto" && $activo->Probre>=40 && $activo->Probre<60) 
                                                        $alto[2]="grey";
                                                     
                                               ?> bgcolor="<?= $muyalto[2]?>" bgcolor="<?= $alto[2]?>" >Alto</td>
                      <td style="width: 5px" <?php if($impacto=="Alto" && $activo->Probabilidad>=60 && $activo->Probabilidad<80) 
                                                      $alto[3]="blue";
                      
                                                   if($impactor=="Alto" && $activo->Probre>=60 && $activo->Probre<80) 
                                                      $alto[3]="grey";
                                                   
                                             ?> bgcolor="<?= $muyalto[3]?>" bgcolor="<?= $alto[3]?>">Muy Alto</td>
                      <td style="width: 5px" <?php if($impacto=="Alto" && $activo->Probabilidad>=80 && $activo->Probabilidad<=100) 
                                                      $alto[4]="blue";
                      
                                                   if($impactor=="Alto" && $activo->Probre>=80 && $activo->Probre<=100) 
                                                      $alto[4]="blue";
                                                   
                                             ?>  bgcolor="<?= $alto[4]?>">Extremo</td>
                   
                      
                    </tr>
                    
                    <tr>
                      <th style="width: 5px">Medio</th>
                      <td style="width: 5px" <?php if($impacto=="Medio" && $activo->Probabilidad>0 && $activo->Probabilidad<20) 
                                                      $medio[0]="blue";
                      
                                                   if($impactor=="Medio" && $activo->Probre>0 && $activo->Probre<20) 
                                                      $medio[0]="grey";
                                                   
                                             ?> bgcolor="<?= $medio[0]?>" >Bajo</td>
                      <td style="width: 20px" <?php if($impacto=="Medio" && $activo->Probabilidad>=20 && $activo->Probabilidad<40) 
                                                       $medio[1]="blue";
                      
                                                    if($impactor=="Medio" && $activo->Probre>=20 && $activo->Probre<40) 
                                                       $medio[1]="grey";
                                                    
                                              ?> bgcolor="<?= $medio[1]?>" >Bajo</td>
                      <td style="width: 20px" <?php if($impacto=="Medio" && $activo->Probabilidad>=40 && $activo->Probabilidad<60) 
                                                       $medio[2]="blue";
                      
                                                    if($impactor=="Medio" && $activo->Probre>=40 && $activo->Probre<60) 
                                                       $medio[2]="grey";
                                                    
                                              ?> bgcolor="<?= $medio[2]?>" >Medio</td>
                      <td style="width: 5px" <?php if($impacto=="Medio" && $activo->Probabilidad>=60 && $activo->Probabilidad<80) 
                                                      $medio[3]="blue";
                      
                                                   if($impactor=="Medio" && $activo->Probre>=60 && $activo->Probre<80) 
                                                      $medio[3]="grey";
                                                   
                                             ?> bgcolor="<?= $medio[3]?>" >Alto</td>
                      <td style="width: 5px" <?php if($impacto=="Medio" && $activo->Probabilidad>=80 && $activo->Probabilidad<=100) 
                                                      $medio[4]="blue";
                      
                                                   if($impactor=="Medio" && $activo->Probre>=80 && $activo->Probre<=100) 
                                                      $medio[4]="grey";
                                                   
                                             ?> bgcolor="<?= $medio[4]?>" >Muy Alto</td>
                   
                      
                    </tr>
                    
                    <tr>
                      <th style="width: 5px">Bajo</th>
                      <td style="width: 5px" <?php if($impacto=="Bajo" && $activo->Probabilidad>0 && $activo->Probabilidad<20) 
                                                      $bajo[0]="blue";
                      
                                                   if($impactor=="Bajo" && $activo->Probre>0 && $activo->Probre<20) 
                                                      $bajo[0]="grey";
                                                   
                                             ?> bgcolor="<?= $bajo[0]?>" >Bajo</td>
                      <td style="width: 20px" <?php if($impacto=="Bajo" && $activo->Probabilidad>=20 && $activo->Probabilidad<40) 
                                                       $bajo[1]="blue";
                      
                                                    if($impactor=="Bajo" && $activo->Probre>=20 && $activo->Probre<40) 
                                                       $bajo[1]="grey";
                                                    
                                              ?> bgcolor="<?= $bajo[1]?>" >Bajo</td>
                      <td style="width: 20px" <?php if($impacto=="Bajo" && $activo->Probabilidad>=40 && $activo->Probabilidad<60) 
                                                       $bajo[2]="blue";
                      
                                                    if($impactor=="Bajo" && $activo->Probre>=40 && $activo->Probre<60) 
                                                       $bajo[2]="grey";
                                                    
                                              ?> bgcolor="<?= $bajo[2]?>">Bajo</td>
                      <td style="width: 5px" <?php if($impacto=="Bajo" && $activo->Probabilidad>=60 && $activo->Probabilidad<80) 
                                                      $bajo[3]="blue";
                      
                                                   if($impactor=="Bajo" && $activo->Probre>=60 && $activo->Probre<80) 
                                                      $bajo[3]="grey";
                                                   
                                             ?> bgcolor="<?= $bajo[3]?>" >Medio</td>
                      <td style="width: 5px" <?php if($impacto=="Bajo" && $activo->Probabilidad>=80 && $activo->Probabilidad<=100) 
                                                      $bajo[4]="blue";
                      
                                                   if($impactor=="Bajo" && $activo->Probre>=80 && $activo->Probre<=100) 
                                                      $bajo[4]="grey";
                                                   
                                             ?> bgcolor="<?= $bajo[4]?>" >Alto</td>
                   
                      
                    </tr>
                
                    
                  </tbody>

                  </table>
             
              <table class="table table-bordered">
                 
                    <tbody>
                     <tr><th style="width: 5px">Impacto y Riesgo Sin Salvaguarda </th<td style="width: 5px" bgcolor="blue"></td></tr>
                     <tr><th style="width: 5px">Impacto y Riesgo Con Salvaguarda</th><td bgcolor="grey"></td></tr>
                     </tbody>

                  </table> 
              
                <?php $n=$n+1; ?>
                <?php  } ?>
                
                    
             
              
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              </div><!-- /.box -->

              
</div>

</body>
</html>


