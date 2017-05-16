/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('#tabela').DataTable({
    "ajax": {
        "url": "/newsletter/main/index.php?c=historico&m=carregarTabelaPrincipal",
        "dataSrc": "listaPrincipal"
    },
    "order": [1, "asc"],
    "columns": [
        {"data": "id"},
        {"data": "template"},
        {"data": "email"},
        {"data": "situacao"},
        {"data": "dataEnvio", 
            "mRender": function (data) {
                return data == null ? "Não Possui" : data;
            }
        }
    ]
});