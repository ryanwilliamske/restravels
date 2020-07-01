(function () {

 const client = algoliasearch("4GY7XC0BHN", "57afb14ff8a61c17c38f6e1ca63c669e");
 const services = client.initIndex('service');

 //This autocomplete function enables displaying of records from the database
 autocomplete('#aa-search-input', { hint: false }, [
  {
   source: autocomplete.sources.hits(services, { hitsPerPage: 3 }),
   displayKey: 'name',
   templates: {

    header: '<div class="aa-suggestions-category">Services</div>',

    suggestion: function (suggestion) {

     /**
      * This acts as an es6 markup retireving the verious 
      * field names that have been pushed to our algolia
      */

     const markup = `
         <div class="algolia-result">
            <span>
                ${suggestion._highlightResult.service_name.value}
            </span>
            <span>
                KE ${suggestion.service_price}
            </span>
           
         </div>
     `;
     return markup;
    },

    /**
     * In situations where we cannot retireve any record with the specified
     * query, we tell the user that we could not retrieve what they may have wanted
     */
    empty: function (result) {
     return 'Sorry we did not find any results for "' + result.query + '"';
    }

   }

  }
 ]).on('autocomplete:selected', function (event, suggestion, dataset) {

  //console.log(suggestion);
  /**
   * After clicking on an item, we are then sent
   * to a different page containing the item itself
   * where in the routes file, we specified a route that 
   * goes to '/search/{service}'
   * 
   * Note that the {service} represents the id of service upon
   * route-model binding
   */

  window.location.href = window.location.origin + '/search/' + suggestion.id;

 });


})();