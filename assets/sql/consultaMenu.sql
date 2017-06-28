SELECT stp.idPagina, pag.nome, pag.uri, pag.mostraMenu, pgr.nome AS nomeGrupo, pgr.htmlid, pgr.icone, setor.nome as setor
FROM adm_setores_paginas AS stp
INNER JOIN adm_usuario AS usu ON usu.idSetor = stp.idSetor AND usu.idUsuario = 1
INNER JOIN adm_paginas AS pag ON pag.idPagina = stp.idPagina
INNER JOIN adm_paginas_grupos AS pgr ON pgr.idPaginaGrupo = pag.idPaginaGrupo
INNER JOIN adm_setores AS setor ON usu.idSetor = setor.idSetor
ORDER BY stp.idPagina