
var totalRow=1;

function updateSequence(tableID) {
	var s_count = 1;
	for(i = 1; i < document.getElementById(tableID).rows.length; i++) {
		document.getElementById(tableID).rows[i].cells[0].childNodes[0].data = s_count++;
	}
}

function addRow(tableID,no_of_fields,all_fields) {
	var elementArray = all_fields.split(',');
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);
	totalRow++;
	row.id = totalRow;
	var cell0 = row.insertCell(0);
	cell0.innerHTML = rowCount;
	
	//construct the other cells
	for(var j=1;j<=no_of_fields;j++) {
		var cell = row.insertCell(j);
		
		if (elementArray[j-1] == 'exam_name') {
		   var element = document.createElement("input");
		   //element.size = "4";
		   element.type = "text";
		
		} else if (elementArray[j-1] == 'percent') {
			   var element = document.createElement("input");
			   element.style.width = "75px";
			   element.type = "text";
			   element.maxLength = 5;
		} else if (elementArray[j-1] == 'order') {
			   var element = document.createElement("input");
			   element.style.width = "75px";
			   element.type = "text";
			   element.maxLength = 2;
			   
		} else if (elementArray[j-1] == 'mandatory') {
			   var element = document.createElement("input");
			   element.type = "checkbox";
			   element.value = "1";
		}
		
		element.name = elementArray[j-1]+rowCount;
		cell.appendChild(element);
		
	}
	updateSequence(tableID);
}

function deleteRow(tableID) {
	try {
		var table = document.getElementById(tableID);
		var rowCount = table.rows.length;
		if(rowCount >2 ){
			table.deleteRow(rowCount-1);
			updateSequence(tableID);
		} else {
			alert('No more rows to delete');
		}
	}catch(e) {
		alert(e);
	}
}

