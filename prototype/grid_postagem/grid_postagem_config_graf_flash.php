<?php
/**
 * $Id: nm_gp_config_graf_flash.php,v 1.16 2010-11-18 20:48:18 sergio Exp $
 */
    include_once('grid_postagem_session.php');
    session_start();

    $nome_apl  = (isset($_GET['nome_apl']))  ? $_GET['nome_apl']  : "";
    $campo_apl = (isset($_GET['campo_apl'])) ? $_GET['campo_apl'] : "nm_resumo_graf";
    $sc_page   = (isset($_GET['sc_page']))   ? $_GET['sc_page']   : "";
    $language  = (isset($_GET['language']))  ? $_GET['language']  : "port";

    if (isset($_POST['bok_graf']) && $_POST['bok_graf'] == "OK" && $_POST['campo_apl'] == "nm_resumo_graf")
    {
       $nome_apl  = $_POST['nome_apl'];
       $campo_apl = $_POST['campo_apl'];
       $sc_page   = $_POST['sc_page'];

       if (isset($_POST['tipo'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_tipo']        = $_POST['tipo'];
       }
       if (isset($_POST['largura'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_larg']        = $_POST['largura'];
       }
       if (isset($_POST['altura'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_alt']         = $_POST['altura'];
       }
       if (isset($_POST['opc_atual'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_opc_atual']   = $_POST['opc_atual'];
       }
       if (isset($_POST['order'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_order']       = $_POST['order'];
       }

       if (isset($_POST['barra_orien'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_orien'] = $_POST['barra_orien'];
       }
       if (isset($_POST['barra_forma'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_forma'] = $_POST['barra_forma'];
       }
       if (isset($_POST['barra_dimen'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_dimen'] = $_POST['barra_dimen'];
       }
       if (isset($_POST['barra_sobre'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_sobre'] = $_POST['barra_sobre'];
       }
       if (isset($_POST['barra_empil'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_empil'] = $_POST['barra_empil'];
       }
       if (isset($_POST['barra_inver'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_inver'] = $_POST['barra_inver'];
       }
       if (isset($_POST['barra_agrup'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_agrup'] = $_POST['barra_agrup'];
       }

       if (isset($_POST['pizza_forma'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_pizza_forma'] = $_POST['pizza_forma'];
       }
       if (isset($_POST['pizza_dimen'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_pizza_dimen'] = $_POST['pizza_dimen'];
       }
       if (isset($_POST['pizza_orden'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_pizza_orden'] = $_POST['pizza_orden'];
       }
       if (isset($_POST['pizza_explo'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_pizza_explo'] = $_POST['pizza_explo'];
       }
       if (isset($_POST['pizza_valor'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_pizza_valor'] = $_POST['pizza_valor'];
       }

       if (isset($_POST['linha_forma'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_linha_forma'] = $_POST['linha_forma'];
       }
       if (isset($_POST['linha_inver'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_linha_inver'] = $_POST['linha_inver'];
       }
       if (isset($_POST['linha_agrup'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_linha_agrup'] = $_POST['linha_agrup'];
       }

       if (isset($_POST['area_forma'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_area_forma']  = $_POST['area_forma'];
       }
       if (isset($_POST['area_empil'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_area_empil']  = $_POST['area_empil'];
       }
       if (isset($_POST['area_inver'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_area_inver']  = $_POST['area_inver'];
       }
       if (isset($_POST['area_agrup'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_area_agrup']  = $_POST['area_agrup'];
       }

       if (isset($_POST['marca_inver'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_marca_inver'] = $_POST['marca_inver'];
       }
       if (isset($_POST['marca_agrup'])) {
           $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_marca_agrup'] = $_POST['marca_agrup'];
       }
    }

    if (isset($_POST['bok_graf']) && $_POST['bok_graf'] == "OK")
    {
?>
       <html>
       <body>
       <script language="javascript">
          self.parent.tb_remove();
       </script>
       </body>
       </html>
<?php
       exit;
    }
    elseif ($campo_apl == "nm_resumo_graf")
    {
        $disp        = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_disp'];
        $tipo        = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_tipo'];
        $largura     = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_larg'];
        $altura      = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_alt'];
        $opc_atual   = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_opc_atual'];
        $order       = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_order'];

        $barra_orien = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_orien'];
        $barra_forma = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_forma'];
        $barra_dimen = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_dimen'];
        $barra_sobre = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_sobre'];
        $barra_empil = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_empil'];
        $barra_inver = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_inver'];
        $barra_agrup = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_agrup'];

        $pizza_forma = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_pizza_forma'];
        $pizza_dimen = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_pizza_dimen'];
        $pizza_orden = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_pizza_orden'];
        $pizza_explo = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_pizza_explo'];
        $pizza_valor = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_pizza_valor'];

        $linha_forma = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_linha_forma'];
        $linha_inver = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_linha_inver'];
        $linha_agrup = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_linha_agrup'];

        $area_forma  = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_area_forma'];
        $area_empil  = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_area_empil'];
        $area_inver  = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_area_inver'];
        $area_agrup  = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_area_agrup'];

        $marca_inver = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_marca_inver'];
        $marca_agrup = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_marca_agrup'];
    }
    else
    {
        $disp        = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_disp'];
        $tipo        = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_tipo'];
        $largura     = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_larg'];
        $altura      = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_alt'];
        $opc_atual   = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_opc_atual'];
        $order       = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_order'];

        $barra_orien = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_orien'];
        $barra_forma = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_forma'];
        $barra_dimen = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_dimen'];
        $barra_sobre = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_sobre'];
        $barra_empil = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_empil'];
        $barra_inver = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_inver'];
        $barra_agrup = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_barra_agrup'];

        $pizza_forma = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_pizza_forma'];
        $pizza_dimen = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_pizza_dimen'];
        $pizza_orden = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_pizza_orden'];
        $pizza_explo = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_pizza_explo'];
        $pizza_valor = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_pizza_valor'];

        $linha_forma = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_linha_forma'];
        $linha_inver = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_linha_inver'];
        $linha_agrup = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_linha_agrup'];

        $area_forma  = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_area_forma'];
        $area_empil  = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_area_empil'];
        $area_inver  = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_area_inver'];
        $area_agrup  = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_area_agrup'];

        $marca_inver = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_marca_inver'];
        $marca_agrup = $_SESSION['sc_session'][$sc_page][$nome_apl] ['graf_marca_agrup'];
    }

    if (empty($largura))
    {
        $largura = 512;
    }
    if (empty($altura))
    {
        $altura = 384;
    }

    $tradutor = array();
    if (isset($_SESSION['scriptcase']['sc_idioma_graf_flash']))
    {
        $tradutor = $_SESSION['scriptcase']['sc_idioma_graf_flash'];
    }

    if (!in_array($tipo, array('Bar', 'Pie', 'Line', 'Area', 'Mark')))
    {
        $tipo = 'Bar';
    }

    $sStyleBarra    = 'display: none;';
    $sStylePizza    = 'display: none;';
    $sStyleLinha    = 'display: none;';
    $sStyleArea     = 'display: none;';
    $sStyleMarcador = 'display: none;';
    switch ($tipo)
    {
        case 'Bar':
            $sStyleBarra = '';
            break;
        case 'Pie':
            $sStylePizza = '';
            break;
        case 'Line':
            $sStyleLinha = '';
            break;
        case 'Area':
            $sStyleArea = '';
            break;
        case 'Mark':
            $sStyleMarcador = '';
            break;
    }

?>
<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<head>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset']; ?>" />
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $_SESSION['scriptcase']['css_popup'] ?>" />
 <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $_SESSION['scriptcase']['css_btn_popup'] ?>" />
 </head>
<body class="scGridPage" style="margin: 0px; overflow-x: hidden">

<script language="javascript" type="text/javascript" src="<?php echo $_SESSION['sc_session']['path_third'] ?>/jquery/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_SESSION['sc_session']['path_third'] ?>/tigra_color_picker/picker.js"></script>

<form name="config_graf" method="post">

<table class="scGridBorder" id="main_table" style="position: relative; top: 20px; left: 20px">
<tr>
 <td class="scGridTabelaTd">
  <table class="scGridTabela">
   <tr>
    <td class="scGridLabelVert" style="text-align: center"><b><?php echo $tradutor[$language]['titulo']; ?></b></td>
   </tr>

 <tr><td class="scGridFieldOdd">
  <table style="border-collapse: collapse; border-width: 0px">
   <tr>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['tipo_g']; ?></b>
     <br />
     <select name="tipo" onChange="omite_lin()">
<?php
foreach ($disp as $graf_disp) {
    switch ($graf_disp) {
        case 'Bar':
            $trad_graf = 'tp_barra';
            break;
        case 'Pie':
            $trad_graf = 'tp_pizza';
            break;
        case 'Line':
            $trad_graf = 'tp_linha';
            break;
        case 'Area':
            $trad_graf = 'tp_area';
            break;
        case 'Mark':
            $trad_graf = 'tp_marcador';
            break;
    }
?>
      <option value="<?php echo $graf_disp; ?>"<?php if ($graf_disp  == $tipo) { echo ' selected'; } ?>><?php echo $tradutor[$language][$trad_graf]; ?></option>
<?php
}
?>
     </select>
    </td>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['modo_gera']; ?></b>
     <br />
<?php
    if (isset($_SESSION['sc_session'][$sc_page][$nome_apl]['graf_mod_allowed']) && 1 == sizeof($_SESSION['sc_session'][$sc_page][$nome_apl]['graf_mod_allowed']))
    {
?>
     <?php echo 2 == $_SESSION['sc_session'][$sc_page][$nome_apl]['graf_mod_allowed'][0] ? $tradutor[$language]['analitico'] : $tradutor[$language]['sintetico']; ?>
     <input type="hidden" name="opc_atual" value="<?php echo $_SESSION['sc_session'][$sc_page][$nome_apl]['graf_mod_allowed'][0]; ?>" />
<?php
    }
    else
    {
?>
     <select  name="opc_atual"  size=1>
       <option value="1" <?php if ($opc_atual == "1")  { echo " selected" ;} ?>><?php echo $tradutor[$language]['sintetico']; ?></option>
       <option value="2" <?php if ($opc_atual == "2")  { echo " selected" ;} ?>><?php echo $tradutor[$language]['analitico']; ?></option>
     </select>
<?php
    }
?>
    </td>
   </tr>
   <tr>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['largura']; ?></b>
     <br />
     <input type="text" size="10" name="largura" value="<?php echo $largura; ?>" />
    </td>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['altura']; ?></b>
     <br />
     <input type="text" size="10" name="altura" value="<?php echo $altura; ?>" />
    </td>
   </tr>
   <tr>
    <td class="scGridFieldOddFont" colspan="2">
     <b><?php echo $tradutor[$language]['order']; ?></b>
     <br />
     <select  name="order"  size=1>
       <option value="" <?php     if ($order == "")      { echo " selected" ;} ?>><?php echo $tradutor[$language]['order_none']; ?></option>
       <option value="asc" <?php  if ($order == "asc")   { echo " selected" ;} ?>><?php echo $tradutor[$language]['order_asc']; ?></option>
       <option value="desc" <?php if ($order == "desc")  { echo " selected" ;} ?>><?php echo $tradutor[$language]['order_desc']; ?></option>
     </select>
    </td>
   </tr>
  </table>
 </td></tr>
 <tr>
  <td class="scGridLabelVert" style="text-align: center"><b><span id="group_title_Bar" style="<?php echo $sStyleBarra; ?>"><?php echo $tradutor[$language]['tp_barra']; ?></span><span id="group_title_Pie" style="<?php echo $sStylePizza; ?>"><?php echo $tradutor[$language]['tp_pizza']; ?></span><span id="group_title_Line" style="<?php echo $sStyleLinha; ?>"><?php echo $tradutor[$language]['tp_linha']; ?></span><span id="group_title_Area" style="<?php echo $sStyleArea; ?>"><?php echo $tradutor[$language]['tp_area']; ?></span><span id="group_title_Mark" style="<?php echo $sStyleMarcador; ?>"><?php echo $tradutor[$language]['tp_marcador']; ?></span></b></td>
 </tr>
 <tr><td class="scGridFieldOdd">

  <table id="group_data_Bar" style="<?php echo $sStyleBarra; ?>border-collapse: collapse; border-width: 0px">
   <tr>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['barra_orien']; ?></b>
     <br />
     <select name="barra_orien">
      <option value="Horizontal"<?php if ('Horizontal' == $barra_orien) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_orien_horiz']; ?></option>
      <option value="Vertical"<?php   if ('Vertical'   == $barra_orien) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_orien_verti']; ?></option>
     </select>
    </td>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['barra_forma']; ?></b>
     <br />
     <select name="barra_forma">
      <option value="Bar"<?php      if ('Bar'      == $barra_forma) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_forma_barra']; ?></option>
      <option value="Cylinder"<?php if ('Cylinder' == $barra_forma) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_forma_cilin']; ?></option>
      <option value="Cone"<?php     if ('Cone'     == $barra_forma) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_forma_cone']; ?></option>
      <option value="Pyramid"<?php  if ('Pyramid'  == $barra_forma) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_forma_piram']; ?></option>
     </select>
    </td>
   </tr>
   <tr>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['barra_dimen']; ?></b>
     <br />
     <select name="barra_dimen">
      <option value="2d"<?php if ('2d' == $barra_dimen) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_dimen_2d']; ?></option>
      <option value="3d"<?php if ('3d' == $barra_dimen) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_dimen_3d']; ?></option>
     </select>
    </td>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['barra_sobre']; ?></b>
     <br />
     <select name="barra_sobre">
      <option value="No"<?php  if ('No'  == $barra_sobre) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_sobre_nao']; ?></option>
      <option value="Yes"<?php if ('Yes' == $barra_sobre) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_sobre_sim']; ?></option>
     </select>
    </td>
   </tr>
   <tr>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['barra_empil']; ?></b>
     <br />
     <select name="barra_empil">
      <option value="Off"<?php     if ('Off'     == $barra_empil) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_empil_desat']; ?></option>
      <option value="On"<?php      if ('On'      == $barra_empil) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_empil_ativa']; ?></option>
      <option value="Percent"<?php if ('Percent' == $barra_empil) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_empil_perce']; ?></option>
     </select>
    </td>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['barra_inver']; ?></b>
     <br />
     <select name="barra_inver">
      <option value="Normal"<?php   if ('Normal'   == $barra_inver) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_inver_norma']; ?></option>
      <option value="Reversed"<?php if ('Reversed' == $barra_inver) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_inver_inver']; ?></option>
     </select>
    </td>
   </tr>
   <tr>
    <td class="scGridFieldOddFont" colspan="2">
     <b><?php echo $tradutor[$language]['barra_agrup']; ?></b>
     <br />
     <select name="barra_agrup">
      <option value="Normal"<?php if ('Normal' == $barra_agrup) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_agrup_conju']; ?></option>
      <option value="Series"<?php if ('Series' == $barra_agrup) { echo ' selected'; } ?>><?php echo $tradutor[$language]['barra_agrup_serie']; ?></option>
     </select>
    </td>
   </tr>
  </table>

  <table id="group_data_Pie" style="<?php echo $sStylePizza; ?>border-collapse: collapse; border-width: 0px">
   <tr>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['pizza_forma']; ?></b>
     <br />
     <select name="pizza_forma">
      <option value="Pie"<?php   if ('Pie'   == $pizza_forma) { echo ' selected'; } ?>><?php echo $tradutor[$language]['pizza_forma_pizza']; ?></option>
      <option value="Donut"<?php if ('Donut' == $pizza_forma) { echo ' selected'; } ?>><?php echo $tradutor[$language]['pizza_forma_donut']; ?></option>
     </select>
    </td>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['pizza_dimen']; ?></b>
     <br />
     <select name="pizza_dimen">
      <option value="2d"<?php if ('2d' == $pizza_dimen) { echo ' selected'; } ?>><?php echo $tradutor[$language]['pizza_dimen_2d']; ?></option>
      <option value="3d"<?php if ('3d' == $pizza_dimen) { echo ' selected'; } ?>><?php echo $tradutor[$language]['pizza_dimen_3d']; ?></option>
     </select>
    </td>
   </tr>
   <tr>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['pizza_orden']; ?></b>
     <br />
     <select name="pizza_orden">
      <option value="Off"<?php  if ('Off'  == $pizza_orden) { echo ' selected'; } ?>><?php echo $tradutor[$language]['pizza_orden_desat']; ?></option>
      <option value="Asc"<?php  if ('Asc'  == $pizza_orden) { echo ' selected'; } ?>><?php echo $tradutor[$language]['pizza_orden_ascen']; ?></option>
      <option value="Desc"<?php if ('Desc' == $pizza_orden) { echo ' selected'; } ?>><?php echo $tradutor[$language]['pizza_orden_desce']; ?></option>
     </select>
    </td>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['pizza_explo']; ?></b>
     <br />
     <select name="pizza_explo">
      <option value="Off"<?php   if ('Off'   == $pizza_explo) { echo ' selected'; } ?>><?php echo $tradutor[$language]['pizza_explo_desat']; ?></option>
      <option value="On"<?php    if ('On'    == $pizza_explo) { echo ' selected'; } ?>><?php echo $tradutor[$language]['pizza_explo_ativa']; ?></option>
      <option value="Click"<?php if ('Click' == $pizza_explo) { echo ' selected'; } ?>><?php echo $tradutor[$language]['pizza_explo_click']; ?></option>
     </select>
    </td>
   </tr>
   <tr>
    <td class="scGridFieldOddFont" colspan="2">
     <b><?php echo $tradutor[$language]['pizza_valor']; ?></b>
     <br />
     <select name="pizza_valor">
      <option value="Valor"<?php   if ('Valor'   == $pizza_valor) { echo ' selected'; } ?>><?php echo $tradutor[$language]['pizza_valor_valor']; ?></option>
      <option value="Percent"<?php if ('Percent' == $pizza_valor) { echo ' selected'; } ?>><?php echo $tradutor[$language]['pizza_valor_perce']; ?></option>
     </select>
    </td>
   </tr>
  </table>

  <table id="group_data_Line" style="<?php echo $sStyleLinha; ?>border-collapse: collapse; border-width: 0px">
   <tr>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['linha_forma']; ?></b>
     <br />
     <select name="linha_forma">
      <option value="Line"<?php   if ('Line'   == $linha_forma) { echo ' selected'; } ?>><?php echo $tradutor[$language]['linha_forma_linha']; ?></option>
      <option value="Spline"<?php if ('Spline' == $linha_forma) { echo ' selected'; } ?>><?php echo $tradutor[$language]['linha_forma_splin']; ?></option>
      <option value="Step"<?php   if ('Step'   == $linha_forma) { echo ' selected'; } ?>><?php echo $tradutor[$language]['linha_forma_degra']; ?></option>
     </select>
    </td>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['linha_inver']; ?></b>
     <br />
     <select name="linha_inver">
      <option value="Normal"<?php   if ('Normal'   == $linha_inver) { echo ' selected'; } ?>><?php echo $tradutor[$language]['linha_inver_norma']; ?></option>
      <option value="Reversed"<?php if ('Reversed' == $linha_inver) { echo ' selected'; } ?>><?php echo $tradutor[$language]['linha_inver_inver']; ?></option>
     </select>
    </td>
   </tr>
   <tr>
    <td class="scGridFieldOddFont" colspan="2">
     <b><?php echo $tradutor[$language]['linha_agrup']; ?></b>
     <br />
     <select name="linha_agrup">
      <option value="Normal"<?php if ('Normal' == $linha_agrup) { echo ' selected'; } ?>><?php echo $tradutor[$language]['linha_agrup_conju']; ?></option>
      <option value="Series"<?php if ('Series' == $linha_agrup) { echo ' selected'; } ?>><?php echo $tradutor[$language]['linha_agrup_serie']; ?></option>
     </select>
    </td>
   </tr>
  </table>

  <table id="group_data_Area" style="<?php echo $sStyleArea; ?>border-collapse: collapse; border-width: 0px">
   <tr>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['area_forma']; ?></b>
     <br />
     <select name="area_forma">
      <option value="Area"<?php   if ('Area'   == $area_forma) { echo ' selected'; } ?>><?php echo $tradutor[$language]['area_forma_area']; ?></option>
      <option value="Spline"<?php if ('Spline' == $area_forma) { echo ' selected'; } ?>><?php echo $tradutor[$language]['area_forma_splin']; ?></option>
     </select>
    </td>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['area_empil']; ?></b>
     <br />
     <select name="area_empil">
      <option value="Off"<?php     if ('Off'     == $area_empil) { echo ' selected'; } ?>><?php echo $tradutor[$language]['area_empil_desat']; ?></option>
      <option value="On"<?php      if ('On'      == $area_empil) { echo ' selected'; } ?>><?php echo $tradutor[$language]['area_empil_ativa']; ?></option>
      <option value="Percent"<?php if ('Percent' == $area_empil) { echo ' selected'; } ?>><?php echo $tradutor[$language]['area_empil_perce']; ?></option>
     </select>
    </td>
   </tr>
   <tr>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['area_inver']; ?></b>
     <br />
     <select name="area_inver">
      <option value="Normal"<?php   if ('Normal'   == $area_inver) { echo ' selected'; } ?>><?php echo $tradutor[$language]['area_inver_norma']; ?></option>
      <option value="Reversed"<?php if ('Reversed' == $area_inver) { echo ' selected'; } ?>><?php echo $tradutor[$language]['area_inver_inver']; ?></option>
     </select>
    </td>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['area_agrup']; ?></b>
     <br />
     <select name="area_agrup">
      <option value="Normal"<?php if ('Normal' == $area_agrup) { echo ' selected'; } ?>><?php echo $tradutor[$language]['area_agrup_conju']; ?></option>
      <option value="Series"<?php if ('Series' == $area_agrup) { echo ' selected'; } ?>><?php echo $tradutor[$language]['area_agrup_serie']; ?></option>
     </select>
    </td>
   </tr>
  </table>

  <table id="group_data_Mark" style="<?php echo $sStyleMarcador; ?>border-collapse: collapse; border-width: 0px">
   <tr>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['marca_inver']; ?></b>
     <br />
     <select name="marca_inver">
      <option value="Normal"<?php   if ('Normal'   == $marca_inver) { echo ' selected'; } ?>><?php echo $tradutor[$language]['marca_inver_norma']; ?></option>
      <option value="Reversed"<?php if ('Reversed' == $marca_inver) { echo ' selected'; } ?>><?php echo $tradutor[$language]['marca_inver_inver']; ?></option>
     </select>
    </td>
    <td class="scGridFieldOddFont">
     <b><?php echo $tradutor[$language]['marca_agrup']; ?></b>
     <br />
     <select name="marca_agrup">
      <option value="Normal"<?php if ('Normal' == $marca_agrup) { echo ' selected'; } ?>><?php echo $tradutor[$language]['marca_agrup_conju']; ?></option>
      <option value="Series"<?php if ('Series' == $marca_agrup) { echo ' selected'; } ?>><?php echo $tradutor[$language]['marca_agrup_serie']; ?></option>
     </select>
    </td>
   </tr>
  </table>

 </td></tr>
 <tr>
  <td class="scGridToolbar" style="text-align: center">
   <?php echo $_SESSION['scriptcase']['bg_btn_popup']['bok']; ?>
   &nbsp; &nbsp; &nbsp;
   <?php echo $_SESSION['scriptcase']['bg_btn_popup']['btbremove']; ?>
  </td>
 </tr>
</table>

 </td>
 </tr>
</table>

  <input type="hidden" name="nome_apl"  value="<?php echo $nome_apl; ?>">
  <input type="hidden" name="campo_apl" value="<?php echo $campo_apl; ?>" >
  <input type="hidden" name="sc_page"   value="<?php echo $sc_page; ?>" >
  <input type="hidden" name="bok_graf"  value="" >
</form>
<script language="javascript">
var chart_type = '<?php echo $tipo; ?>';
function omite_lin() {
 var ind = document.config_graf.tipo.selectedIndex,
     val = document.config_graf.tipo.options[ind].value,
     mt  = document.getElementById('main_table');
 if (val != chart_type) {
  $('#group_title_' + chart_type).hide();
  $('#group_data_' + chart_type).hide();
  chart_type = val;
  $('#group_title_' + chart_type).show();
  $('#group_data_' + chart_type).show();
 }
 var W = mt.clientWidth,
     H = mt.clientHeight;
 if (0 == W || 0 == H) {
  setTimeout("omite_lin()", 50);
 }
 else {
  self.parent.tb_resize(H + 40, W + 40);
 }
}
function processa() {
 document.config_graf.bok_graf.value = "OK";
 document.config_graf.submit();
}
</script>
<script>
$(function() {
 setTimeout("omite_lin()", 50);
});
</script>
</body>
</html>