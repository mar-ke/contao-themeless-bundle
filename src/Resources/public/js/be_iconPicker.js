/* files/themore/assets/js/be_iconPicker.js | last updated v1.4.1 */
	
document.addEventListener('DOMContentLoaded', function () {
    
    console.log('Icon-BE script loaded')
    
    const container = document.querySelector('#ctrl_rsce_field_icon');
    console.log(container);

    if (!container) return;

    const search = document.createElement('input');
    search.type = 'text';
    search.placeholder = 'Icon suchen...';
    search.classList.add('tl_text', 'search-icons'); // Styling wie Contao-Feld


    console.log(search);
    
    

    // Vor dem ersten Input einfügen
    const firstInput = container.querySelector('input[type="radio"]');
    
    console.log(firstInput)
    
    if (firstInput) {
        firstInput.parentNode.insertBefore(search, firstInput);
        //container.insertBefore(search, firstInput);
    }

    search.addEventListener('input', function () {
        const filter = this.value.toLowerCase();

        // Contao Version Test
        const spanCount = container.querySelectorAll('#ctrl_rsce_field_icon span input[type="radio"]').length;
        
        let cVersion = "";
        
        if ( spanCount )    { cVersion = '5.5'; console.log('5.5') } 
        else                { cVersion = '5.3'; console.log('5.3') } 

        const inputs = container.querySelectorAll('input[type="radio"]');

        inputs.forEach((input, index) => {
            
            if ( cVersion == '5.5' ) {

                if ( index == 0 ) {
                    return;
                }

            }

            const label = container.querySelector('label[for="' + input.id + '"]');
            const img = label?.querySelector('img');

            const valueMatch = input.value.toLowerCase().includes(filter);
            const srcMatch = img?.getAttribute('src').toLowerCase().includes(filter);

            const visible = !filter || valueMatch || srcMatch;

            if ( cVersion == '5.3' ) {
                input.style.display = visible ? '' : 'none';
                label.style.display = visible ? '' : 'none';
            }

            if ( cVersion == '5.5' ) {
                input.parentElement.style.display = visible ? '' : 'none';
            }
            

        });
    });
    
    
    container.insertAdjacentHTML("beforeend", `<style>#ctrl_rsce_field_icon br{display:none}</style>`)
    
});