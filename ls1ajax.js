$('.campositionsensor').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'campositionsensor', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.campositionsensor').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.camshaft').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'camshaft', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.camshaft').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.clutchpilotbearing').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'clutchpilotbearing', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.clutchpilotbearing').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.coilpack1').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'coilpack1', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.coilpack1').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.coilpack2').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'coilpack2', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.coilpack2').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.coolanttempsensor').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'coolanttempsensor', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.coolanttempsensor').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.crankbearing1').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'crankbearing1', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.crankbearing1').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.crankbearing2').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'crankbearing2', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.crankbearing2').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.crankbearing3').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'crankbearing3', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.crankbearing3').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.crankbearing4').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'crankbearing4', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.crankbearing4').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.crankbearing5').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'crankbearing5', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.crankbearing5').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.crankshaft').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'crankshaft', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.crankshaft').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.engineblock').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'engineblock', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.engineblock').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.exhaustpushrods1').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'exhaustpushrods1', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.exhaustpushrods1').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.exhaustpushrods2').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'exhaustpushrods2', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.exhaustpushrods2').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.exhaustrockers1').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'exhaustrockers1', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.exhaustrockers1').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.exhaustrockers2').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'exhaustrockers2', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.exhaustrockers2').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.exhaustvalves1').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'exhaustvalves1', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.exhaustvalves1').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.exhaustvalves2').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'exhaustvalves2', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.exhaustvalves2').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.fuelrail').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'fuelrail', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.fuelrail').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.head1').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'head1', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.head1').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.head2').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'head2', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.head2').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.intakemanifold').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'intakemanifold', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.intakemanifold').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.intakepushrods1').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'intakepushrods1', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.intakepushrods1').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.intakepushrods2').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'intakepushrods2', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.intakepushrods2').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.intakerockers1').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'intakerockers1', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.intakerockers1').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.intakerockers2').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'intakerockers2', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.intakerockers2').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.intakevalves1').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'intakevalves1', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.intakevalves1').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.intakevalves2').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'intakevalves2', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.intakevalves2').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.knocksensor').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'knocksensor', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.knocksensor').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.maincap1').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'maincap1', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.maincap1').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.maincap2').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'maincap2', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.maincap2').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.maincap3').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'maincap3', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.maincap3').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.maincap4').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'maincap4', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.maincap4').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.maincap5').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'maincap5', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.maincap5').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.mainbearing1').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'mainbearing1', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.mainbearing1').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.mainbearing2').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'mainbearing2', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.mainbearing2').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.mainbearing3').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'mainbearing3', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.mainbearing3').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.mainbearing4').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'mainbearing4', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.mainbearing4').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.mainbearing5').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'mainbearing5', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.mainbearing5').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.mapsensor').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'mapsensor', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.mapsensor').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.oilfillerneck').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'oilfillerneck', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.oilfillerneck').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.oillevelsensor').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'oillevelsensor', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.oillevelsensor').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.oilpan').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'oilpan', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.oilpan').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.oilpressuresensor').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'oilpressuresensor', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.oilpressuresensor').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.oiltempsensor').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'oiltempsensor', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.oiltempsensor').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.piston1').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'piston1', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.piston1').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.piston2').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'piston2', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.piston2').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.piston3').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'piston3', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.piston3').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.piston4').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'piston4', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.piston4').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.piston5').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'piston5', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.piston5').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.piston6').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'piston6', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.piston6').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.piston7').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'piston7', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.piston7').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.piston8').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'piston8', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.piston8').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.pushrodexhaustbank1').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'pushrodexhaustbank1', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.pushrodexhaustbank1').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.pushrodexhaustbank2').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'pushrodexhaustbank2', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.pushrodexhaustbank2').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.pushrodintakebank1').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'pushrodintakebank1', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.pushrodintakebank1').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.pushrodintakebank2').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'pushrodintakebank2', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.pushrodintakebank2').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.steamtube').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'steamtube', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.steamtube').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.timingchain').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'timingchain', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.timingchain').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.throttlebody').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'throttlebody', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.throttlebody').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.valleycover').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'valleycover', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.valleycover').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.valvecover1').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'valvecover1', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.valvecover1').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.valvecover2').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'valvecover2', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.valvecover2').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});
$('.windagetray').one('dblclick', function(){$.ajax({url: 'ajax.php',type: 'POST',data: {selectornamevariable:'windagetray', VIN:savedVIN},dataType: 'JSON',success: function(result){$('#dialogue').append(result[0].selectornamevariable+"<br>");$('.windagetray').addClass('red');storage.push(result[0].selectornamevariable);console.log(storage);}});});


