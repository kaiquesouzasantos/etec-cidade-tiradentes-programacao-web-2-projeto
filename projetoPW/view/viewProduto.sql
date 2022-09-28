create view vwProduto as
select codProduto, nomeProduto, precoProduto, nomeCategoria, fotoProduto from tbproduto
inner join tbcategoria on tbproduto.codCategoria = tbcategoria.codCategoria




