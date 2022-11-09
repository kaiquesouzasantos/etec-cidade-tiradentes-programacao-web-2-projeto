<?php 
    class VendaController{
        public static function listaVendaCarrinho(){
            $itensVenda = VendaDAO::listaVenda();

            foreach($itensVenda as $item){
                echo('
                <tr>
                    <td><a href="#"><i class="bx bx-trash"></i></a></td>
                    <td><img src="'.$item->getImgProduto().'" alt=""></td>
                    <td>'.$item->getNomeProduto().'</td>
                    <td>R$'.$item->getPrecoProduto().'</td>
                    <td>
                        <a href="#"><i class="bx bx-minus"></i></a>
                        <input type="number" name="">
                        <a href="#"><i class="bx bx-plus-circle"></i></a>
                    </td>
                </tr>
                ');
            }
        }
    }
?>