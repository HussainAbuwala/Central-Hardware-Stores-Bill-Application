$(window).ready(function () {
            
   
            $("#save").click(function () {
                var rows = [];
                $("tr.content").each(function(index,element) {
                    var cells = [];
                    $(this).find('td').each(function(i,e) {
                        cells.push($(e).text())

                    });
                    
                    rows.push(cells);
                    });
                
            
            
                var billno = $("#b_no").val();
                var ordno = $("#o_no").val();
                var billdate = $("#b_d").val();
                var orddate = $("#o_d").val();
                var compname = [7,11];

                $.post("saveRecords.php",{
                        b_no: billno,
                        o_no: ordno,
                        b_d:  billdate,
                        o_d:  orddate,
                        c_n:  7,
                        vals: rows
                        }
            );
                
            window.print();
            
            })
            
            
        
        });
    
    
function createButn(name,type,Id) {
    var btn = document.createElement('BUTTON');
    
    btn.setAttribute("type",type);
    btn.setAttribute("name",name);
    btn.id = Id;
    
    var t = document.createTextNode("Save To Server");       // Create a text node
    btn.appendChild(t);
    return btn;

}