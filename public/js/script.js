document.addEventListener('DOMContentLoaded', function () {
    const regionSelect = document.getElementById('region');
    const provinceSelect = document.getElementById('province');
    const citySelect = document.getElementById('city');
    const barangaySelect = document.getElementById('barangay');
  
    // Helper Functions
    function sortAlphabetically(array, key) {
      return array.sort((a, b) => a[key].localeCompare(b[key]));
    }
  
    function populateDropdown(dropdown, items, key) {
      dropdown.innerHTML = '<option value="">Select</option>';
      items.forEach(item => {
        const option = document.createElement('option');
        option.value = item.code; // Assuming 'code' is the unique identifier
        option.textContent = item[key];
        dropdown.appendChild(option);
      });
    }
  
    // Fetch Regions
    fetch('https://psgc.gitlab.io/api/regions/')
      .then(response => response.json())
      .then(data => {
        const sortedRegions = sortAlphabetically(data, 'regionName');
        populateDropdown(regionSelect, sortedRegions, 'regionName');
      });
  
    // Event Listeners
    regionSelect.addEventListener('change', function () {
      const regionCode = this.value;
      if (!regionCode) return;
  
      fetch(`https://psgc.gitlab.io/api/regions/${regionCode}/provinces/`)
        .then(response => response.json())
        .then(data => {
          const sortedProvinces = sortAlphabetically(data, 'name');
          populateDropdown(provinceSelect, sortedProvinces, 'name');
          populateDropdown(citySelect, []); // Clear city dropdown
          populateDropdown(barangaySelect, []); // Clear barangay dropdown
        });
    });
  
    provinceSelect.addEventListener('change', function () {
      const provinceCode = this.value;
      if (!provinceCode) return;
  
      fetch(`https://psgc.gitlab.io/api/provinces/${provinceCode}/cities-municipalities/`)
        .then(response => response.json())
        .then(data => {
          const sortedCities = sortAlphabetically(data, 'name');
          populateDropdown(citySelect, sortedCities, 'name');
          populateDropdown(barangaySelect, []); // Clear barangay dropdown
        });
    });
  
    citySelect.addEventListener('change', function () {
      const cityCode = this.value;
      if (!cityCode) return;
  
      fetch(`https://psgc.gitlab.io/api/cities-municipalities/${cityCode}/barangays/`)
        .then(response => response.json())
        .then(data => {
          const sortedBarangays = sortAlphabetically(data, 'name');
          populateDropdown(barangaySelect, sortedBarangays, 'name');
        });
    });
  });
  