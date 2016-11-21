<script>
  $(function() {
    setMenuAtivo("<?=strtolower($this->request->params['controller']);?>", "<?=strtolower($this->request->params['action']);?>");
  });
</script>


<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <?php
            echo $this->Html->image(
                'TwitterBootstrap.user2-160x160.jpg',
                ['class'=>'img-circle',  "alt"=>"User Image"]
            );
        ?>
    </div>
    <div class="pull-left info">
      <p>Sidnei Tertuliano Jr.</p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <li class="header">MENU</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="treeview garages">
      <a href="#">
        <i class="fa fa-home"></i> <span>Minhas Garagens</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li class="add"><?=$this->Html->link('Adcionar', '/garages/add');?></li>
        <li class="visualizar"><?=$this->Html->link('Visualizar/Editar', '/garages');?></li>
      </ul>
    </li>
    <li class="treeview users">
      <a href="#">
        <i class="fa fa-user"></i> <span>Usuários</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li class="add"><?=$this->Html->link('Adcionar', '/users/add');?></li>
        <li class="visualizar"><?=$this->Html->link('Visualizar/Editar', '/users');?></li>
      </ul>
    </li>
    <li class="treeview addresses">
      <a href="#">
        <i class="fa fa-arrows"></i> <span>Endereços</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li class="add"><?=$this->Html->link('Adcionar', '/addresses/add');?></li>
        <li class="visualizar"><?=$this->Html->link('Visualizar/Editar', '/addresses');?></li>
      </ul>
    </li>
    <li class="treeview towhouses">
      <a href="#">
        <i class="fa fa-building"></i> <span>Condomínios</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li class="add"><?=$this->Html->link('Adcionar', '/towhouses/add');?></li>
        <li class="visualizar"><?=$this->Html->link('Visualizar/Editar', '/towhouses');?></li>
      </ul>
    </li>
    <li class="treeview vehiclestypes">
      <a href="#">
        <i class="fa fa-car"></i> <span>Tipos de Veículos</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li class="add"><?=$this->Html->link('Adcionar', '/vehiclesTypes/add');?></li>
        <li class="visualizar"><?=$this->Html->link('Visualizar/Editar', '/vehiclesTypes');?></li>
      </ul>
    </li>
    <li class="treeview periods">
      <a href="#">
        <i class="fa fa-clock-o"></i> <span>Períodos</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li class="add"><?=$this->Html->link('Adcionar', '/periods/add');?></li>
        <li class="visualizar"><?=$this->Html->link('Visualizar/Editar', '/periods');?></li>
      </ul>
    </li>
    <li class="treeview plans">
      <a href="#">
        <i class="fa fa-check-square-o"></i> <span>Planos</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li class="add"><?=$this->Html->link('Adcionar', '/plans/add');?></li>
        <li class="visualizar"><?=$this->Html->link('Visualizar/Editar', '/plans');?></li>
      </ul>
    </li>
    <li class="treeview paymentstypes">
      <a href="#">
        <i class="fa fa-credit-card"></i> <span>Formas de Pagamento</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li class="add"><?=$this->Html->link('Adcionar', '/paymentsTypes/add');?></li>
        <li class="visualizar"><?=$this->Html->link('Visualizar/Editar', '/paymentsTypes');?></li>
      </ul>
    </li>
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
