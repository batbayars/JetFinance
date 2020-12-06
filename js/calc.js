getp();
function getp() {
            //if(document.getElementById("tolborhelber").value==''){
            // hemjee, huu, honhugatsaa, hugatsaa, tolborhelber
            hemjee_str = document.getElementById("hemjee").value;
            hemjee = hemjee_str.replace(/,/g,"");
            huu = document.getElementById("huu").value * 12;
            hugatsaa = document.getElementById("hugatsaa").value;
            hhhhhh = huu/100/12;
            aaaa22 = calculate_payment(hemjee, hhhhhh, hugatsaa);
            aaaa2244 = (aaaa22*0.09)/100; //0.09       0.104
            aaaa22 = aaaa22 + aaaa2244;
            aaaa22 = parseInt(aaaa22);
            console.log(aaaa22);
            console.log(huu);
			      //document.getElementById("res_huu").innerHTML = huu;
            document.getElementById("res_tololt").innerHTML = aaaa22.toLocaleString();
            //}
            
            //document.forms.aago.submit();
            //alert('hemjee = '+hemjee+'\n huu='+huu/100+'\nhugatsaa='+hugatsaa+'\nsard='+aaaa);
            }
            
            
            function calculate_payment(PV, IR, NP) {
              var PMT = (PV * IR) / (1 - Math.pow(1 + IR, -NP))
              return round_decimals(PMT, 2)
            }
            
            
            
            function round_decimals(original_number, decimals) {
              var result1 = original_number * Math.pow(10, decimals)
              var result2 = Math.round(result1)
              var result3 = result2 / Math.pow(10, decimals)
              return (result3)
}

