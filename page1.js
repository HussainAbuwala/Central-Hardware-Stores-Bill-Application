function billListener() {
    //code

    var bill = document.getElementById("b_no");
    
    bill.addEventListener('blur',add);
    bill.addEventListener('focus',reset);
}

function reset(e) {
    var parent1 = e.target.parentElement.querySelector("#error");
    var parent2 = e.target.parentElement.querySelector("#valid");
    parent1.innerHTML = '';
    parent2.innerHTML = '';
}

function check(e) {
    if(document.getElementById("valid").childElementCount === 0){
        return false;
    }
    resetTimeout(function(){ alert("Hello"); }, 3000);;
}


function add(e) {

    var v1 = InvalidBillNoAdder(e.target);
    var v2 = EmptyFieldAdder(e.target);

    if (v1 !== false && v2 !== false) {
        $('#valid').load("validateBill.php",{
            b_no: e.target.value
        },function () {
                
                if(document.getElementById("valid").childElementCount === 0){
                    DuplicateBillAdder(e.target)
                }
            
            })
        
    };

}

function EmptyFieldAdder(target) {
    if (checkEmpty(target)){
        var parent = target.parentElement.querySelector("#error");
        addVmsg(createSpan("Field Is Empty"),parent);
        return false;
    }
}

function DuplicateBillAdder(target) {
    var parent = target.parentElement.querySelector("#error");
    addVmsg(createSpan("Bill No Already Used"),parent);
}

function InvalidBillNoAdder(target) {
    if (!checkBill(target)) {
        var parent = target.parentElement.querySelector("#error");
        addVmsg(createSpan("Invalid Bill Format"),parent);
        return false;
    }
}


function createSpan(msg) {
    var newSpan = document.createElement('span');
    var text = document.createTextNode(msg);
    newSpan.appendChild(text);
    
    return newSpan
}

function addVmsg(span,parent) {
    parent.innerHTML = ''
    parent.appendChild(span);
}

function checkEmpty(target) {
    if(target.value.trim() === ''){return true}
    else{return false}
}

function checkBill(target) {
    if (/^CHS\/[0-9][0-9]+\/[0-9]{4}-[0-9]{4}$/.test(target.value)) {
        return true;
    }
    return false;
}



if (typeof window != 'undefined'){
    window.onload = function () {
        billListener();
    }
}