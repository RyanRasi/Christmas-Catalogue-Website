function convertCurrency()
		{
			var fromCurrency = document.getElementById("fromCurrency").value;
			var toCurrency = document.getElementById("toCurrency").value;
			var xmlhttp = new XMLHttpRequest();
			var url = "https://free.currencyconverterapi.com/api/v6/convert?q=" + fromCurrency + "_" +toCurrency + "&compact=ultra"; //URL for finding the right currency with inputs via the drop down
		
			xmlhttp.open("GET", url, true);
			xmlhttp.send();
			xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
				{
					var result = xmlhttp.responseText;

					var jsResult = JSON.parse(result); //Gets result from URL
					resultdivide = result.split(':') //Splits by the :
					var data1 = resultdivide[0];	//creates data to the first array
					var data2 = resultdivide[1];	//creates data to the second array
					var finalresult = data2.replace('}',''); //Splits by the }
					//alert(finalresult); not needed anymore but very useful for testing
										
					var fromAmount = document.getElementById("fromAmount").value; // gets the user input from the text box
					
					multiplyC = (finalresult * fromAmount).toFixed(2); //multiplies by the currency and saves as two decimal places
						
					
					document.getElementById("toAmount").value = multiplyC; // sends output to the text box to be displayed to the user
					
				}
			}
		}