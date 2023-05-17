d3.json("/barchart/Data").then(function(data) {

	// console.log(data.dosen_pembimbing_2)

	// Aggregate data by condition
	var DosPem1Data = d3.group(data, d => d.dosen_pembimbing_1);
	var DosPem2Data = d3.group(data, d => d.dosen_pembimbing_2);
	var DosUji = d3.group(data, d => d.dosen_penguji);


	var DosPemCount1 = Array.from(DosPem1Data, ([DosPem, data]) => ({ DosPem: DosPem, count: data.length }));
	var DosPemCount2 = Array.from(DosPem2Data, ([DosPem, data]) => ({ DosPem: DosPem, count: data.length }));
	var DosUjiCount = Array.from(DosUji, ([DosPem, data]) => ({ DosPem: DosPem, count: data.length}));

	// console.log(DosUjiCount);

	// var mergedData = DosPemCount1.concat(DosPemCount2);

	// console.log(mergedData)

	const DosPemCount = Object.values([...DosPemCount1, ...DosPemCount2].reduce((acc, cur) => {
		if (!acc[cur.DosPem]) {
			acc[cur.DosPem] = { DosPem: cur.DosPem, count: 0 };
		}
		acc[cur.DosPem].count += cur.count;
		return acc;
	}, {}));


	const DosTotalCount = Object.values([...DosPemCount, ...DosUjiCount].reduce((acc, cur) => {
		if (!acc[cur.DosPem]) {
			acc[cur.DosPem] = { DosPem: cur.DosPem, count: 0 };
		}
		acc[cur.DosPem].count += cur.count;
		return acc;
	}, {}));

	// console.log(DosPemCount);
	// console.log(DosTotalCount)

	const getFilters = () => {
		const sex = $('.btn-group .active input.sex').attr('value');
		return { sex };
	  };
	  

	const filterData = () => {
		const filters = getFilters();
		if(filters.sex === 'pendamping'){
			return DosPemCount;
		} else if(filters.sex === 'penguji'){
			return DosUjiCount;
		} else if(filters.sex === 'total'){
			return DosTotalCount;
		}
	}



	// Sort data by count in descending order
	DosPemCount.sort((a, b) => d3.descending(a.count, b.count));
	DosUjiCount.sort((a, b) => d3.descending(a.count, b.count));
	DosTotalCount.sort((a, b) => d3.descending(a.count, b.count));

	console.log(DosPemCount);
	console.log(DosUjiCount);

	let barchart = new Barchart({ parentElement: '#vis'}, filterData());

	barchart.updateVis();

	$('input').change(() => {
		barchart.data = filterData();
		barchart.updateVis();
		
		const filteredData = filterData();
		// console.log(filteredData);
	}
	);


	const DosenData = DosTotalCount.reduce((acc, cur) => {
		const matchingUji = DosUjiCount.find((uji) => uji.DosPem === cur.DosPem);
		const matchingPembimbing = DosPemCount.find((pem) => pem.DosPem === cur.DosPem);
		acc[cur.DosPem] = {
			dosen : cur?.DosPem || 0,
		  countPem: matchingPembimbing?.count || 0 ,
		  countUji: matchingUji?.count || 0,
		  countTotal: cur?.count || 0,
		};
		return acc;
	  }, {});
	  

	  const DosPemArray = Object.values(DosenData);

		const table = document.createElement('table');
		table.className = 'my-table';

		const headerRow = table.insertRow();
		const th1 = document.createElement('th');
		th1.textContent = "Daftar Dosen";
		th1.classList.add("my-custom-class");
		headerRow.appendChild(th1);

		const th2 = document.createElement('th');
		th2.textContent = "mahasiswa dibimbing";
		th2.style.fontWeight = "bold";
		headerRow.appendChild(th2);

		const th3 = document.createElement('th');
		th3.textContent = "mahasiswa diuji";
		th3.style.fontWeight = "bold";
		headerRow.appendChild(th3);
		
		const th4 = document.createElement('th');
		th4.textContent = "Total mahasiswa";
		th4.style.fontWeight = "bold";
		headerRow.appendChild(th4);
		  

		const generateTableRows = (data) => {
		  data.forEach((d) => {
			const row = table.insertRow();
			Object.values(d).forEach((value) => {
			  const td = document.createElement('td');
			  td.textContent = value;
			  row.appendChild(td);
			});
		  });
		};
		
		generateTableRows(DosPemArray);
		

		



		document.getElementById('table-container').appendChild(table);


	}).catch(function(error) {
		console.log(error);
	});



