SELECT concat(fpc1.CodigoContabil,'.',fpc2.CodigoContabil) as CodigoPlano, fpc2.DescricaoPlano AS PlanoDescricao
 FROM financeiro_plano_contas AS fpc1
   LEFT JOIN financeiro_plano_contas AS fpc2 ON fpc2.PlanoContabilPai_ID = fpc1.PlanoID
   LEFT JOIN financeiro_plano_contas AS fpc3 ON fpc3.PlanoContabilPai_ID = fpc2.PlanoID
   LEFT JOIN financeiro_plano_contas AS fpc4 ON fpc4.PlanoContabilPai_ID = fpc3.PlanoID
   LEFT JOIN financeiro_plano_contas AS fpc5 ON fpc5.PlanoContabilPai_ID = fpc4.PlanoID
  where fpc2.PlanoContabilPai_ID = '1'
  order by fpc1.PlanoID