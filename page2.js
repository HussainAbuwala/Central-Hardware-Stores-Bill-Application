function delListeners() {
    //code
    var btns = document.getElementsByClassName("del");
    startEvents(btns,"click",deleteRow);
}

function startEvents(elems,evenType,f) {
    var i;
    for (i = 0; i < elems.length; i++) {
        elems[i].addEventListener(evenType,f);
    }

}

function deleteRow(e) {
    //code
    var targt = e.target;
    var tgtprnt = targt.parentElement;  //row
    var tgtgrndprnt = tgtprnt.parentElement;    //tabl
    tgtgrndprnt.removeChild(tgtprnt);

}

function addListener(args) {
    //code

    var addbtn = document.getElementById("add");
    addbtn.addEventListener("click",addTotable);
}



//<button type='button' name='del' class = 'del' >Delete Record</button>
function addTotable(e) {
    //code
    
    var qty = document.getElementById("qty");
    var rate = document.getElementById("rate");
    var per = document.getElementById("per");
    var ps = document.getElementById("ps");
    var desc = document.getElementById("desc");
 
    var tbl = document.getElementById("tbl");  
    var arr = [qty,desc,rate,per,ps];
    var tr = document.createElement("TR");
    
    var i;
    for (i = 0; i < arr.length; i++) {
        var cloned = arr[i].cloneNode(false);
        cloned.removeAttribute("id");
        if (i === 1) {
            cloned.className = "tbltextArea";
        }
        else {cloned.className = "tblInput";
        }
        tr.appendChild(createCell(cloned));
    }
    
    tr.appendChild(createButn('del','submit','del'));
    
    
    for (j = 0; j < arr.length; j++) {
        arr[j].value = '';
    }
    
    tbl.appendChild(tr);
    delListeners();

}

function createCell(text) {
    var td = document.createElement("TD");
    td.appendChild(text);
    return td;
}


function createButn(name,type,cls) {
    //code
    var btn = document.createElement('BUTTON');
    
    btn.setAttribute("type",type);
    btn.setAttribute("name",name);
    btn.className = cls;
    
    var t = document.createTextNode("Delete Record");       // Create a text node
    btn.appendChild(t);
    return btn;
    
}

if (typeof window != 'undefined'){
    window.onload = function () {
        addListener();
    }
}
