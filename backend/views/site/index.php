<?php

/* @var $this yii\web\View
site-index
*/

use yii\widgets\Breadcrumbs;

//$slogan = 'Gerencie seu site';
$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];

?>

<!-- index here -->
<!-- Visão geral do site -->
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Visão Geral Do Site</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-3">
            <div class="well dash-box">
                <h2><i class="fas fa-user-tie"></i> <?=  $data['user'] ?></h2>
                <h4>Usuarios</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="well dash-box">
                <h2><i class="fas fa-pencil-alt"></i> <?=  $data['post'] ?></h2>
                <h4>Posts</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="well dash-box">
                <h2><i class="fas fa-chart-line"></i> 0</h2>
                <h4>Visitas</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="well dash-box">
                <h2><i class="fas fa-comment-dots"></i> <?= $data['comentario'] ?></h2>
                <h4>Comentarios</h4>
            </div>
        </div>
    </div>
</div>

<!-- Ultimos Comentarios -->
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Ultimos Comentarios</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover">
            <tr>
                <td><span class="glyphicon glyphicon-user" aria-hidden="true"> Usuarios</td>
                <td>comentario</td>
            </tr>

            <?php

            //print_r($comment);
               foreach ($comment as $comments){
                    //echo $comments['autor'];
                    echo "<tr>";
                    echo "<td> <img src=\"assets/user/protester.jpg\"  width=\"50\" height=\"50\">".$comments['autor']."</td>";
                    echo "<td>".$comments['comentario']."</td>";
                    echo "</tr>";
                }
            ?>
            <!--
            <tr>
                <td> <img src="assets/user/protester.jpg" alt="" width="50" height="50"> Aminotep bulsanov</td>
                <td>comentarios...</td>
            </tr>
            <tr>
                <td> <img src="assets/user/protester.jpg" alt="" width="50" height="50"> Krugral kricrolagran</td>
                <td>comentarios...</td>
            </tr>-->
        </table>
    </div>
    <div class="panel-footer btn btn-block bb">Ver Todos</div>
</div>

<!-- Ultimos Usuarios -->
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Ultimos Usuarios</h3>
    </div>
    <div class="panel-body">
        Panel content
    </div>
</div>

