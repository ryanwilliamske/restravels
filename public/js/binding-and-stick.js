$(document).ready(function () {
 $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
  localStorage.setItem('activeTab', $(e.target).attr('href'));
 });
 var activeTab = localStorage.getItem('activeTab');
 if (activeTab) {
  $('#myTab a[href="' + activeTab + '"]').tab('show');
 }
});

/**
 * This operation is aimed at making subimt button inactive
 * unless input has been changed
 */

$('form')
 .each(function () {
  $(this).data('serizalized', $(this).serialize())
 })
 .on('change input', function () {
  $(this)
   .find('input:submit, button:submit')
   .prop('disabled', $(this).serialize() == $(this).data('serialized'));
 })
 .find('input:submit, button:submit')
 .prop('disabled', true);