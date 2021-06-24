
function printDiv()
{
    // Pega elemento html para impressão através do seu id
    var divToPrint = document.getElementById('divToPrint');
    // Instancia nova janela
    var newWin = window.open('', 'Print-Window');
    // Aciona nova janela para abrir
    newWin.document.open();
    // Escreve na janela elemento html, já trazendo na abertura a funcão print para imprimir
    newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
    // Fechar a nova janela
    newWin.document.close();
    // Após concluir ação do print fecha janela nova
    setTimeout(function(){
    newWin.close();
    }, 10);
}

 
