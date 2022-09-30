create view vwVenda as
select codVenda, dataVenda, valorTotalvenda, statusVenda, nomeCliente from tbvenda
inner join tbcliente on tbvenda.codCliente = tbcliente.codCliente