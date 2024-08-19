// Call the dataTables jQuery plugin
$(document).ready(function () {
  $('#dataTable').DataTable();
});

/////////////////////////////////////////////////////////////////staff
$(document).ready(function () {
  $('#listStaff').DataTable({

  });
});

//////////////////////////////////////////////////////////Position
  $(document).ready(function () {
    $('#listPosition').DataTable({
      columnDefs: [
        { targets: [5, 4,3], visible: false, searchable: false },
      ],
    });
  });
 ///////////////////////////////////////////////////// //committee
  $(document).ready(function () {
    $('#listCommittee').DataTable({
    });
  });
///////////////////////////////////////////////////Aid
$(document).ready(function () {
  $('#listAid').DataTable({
    columnDefs: [
      { targets: [5,], visible: false, searchable: false },
    ],
  });
});
///////////////////////////////////////////////////////////////////////////////listAidRes
$(document).ready(function () {
  $('#listAidRes').DataTable({
   
  });
});

////////////////////////////////////////////////// JKK
$(document).ready(function () {
  $('#listJKK').DataTable();
});



////////////////////////////////////////////////// Resident
$(document).ready(function () {
  $('#listRes').DataTable({
    columnDefs: [
      { targets: [5,], visible: false, searchable: false },
    ],
  });
});

///////////////////////////////////////////////////////////////////////////////listResatJKK
$(document).ready(function () {
  $('#listResi').DataTable({
    columnDefs: [
      { targets: [5,], visible: false, searchable: false },
    ],
  });
});
