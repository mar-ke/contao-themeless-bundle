/* files/themore/assets/js/be_iconPicker.js | last updated v1.4.0 (created) */

// ## De/activate Backend Grid	##



// ## De/activate Backend Grid	##


    	
    document.addEventListener('turbo:load', () => {
        const listing = document.querySelector('#tl_listing > ul');
        if (!listing) return;
    
        const items = Array.from(listing.children);
        const wrapperStack = [];
        
        let gridClasses = ['grid'];
    
        items.forEach((li) => {
            const wrapperStart = li.querySelector('.wrapper_start');
            const wrapperEnd = li.querySelector('.wrapper_stop');
    
            if (wrapperStart) {
                
                li.classList.add('themore_starting_wrapper');
                
                const startInfo = li.querySelector('.rsce_themoreGrid_information');
                
                if ( startInfo ) {
                    
                    gridClasses = ['grid']
                    
                    gridClasses.push(startInfo.getAttribute('data-grid'));
                    gridClasses.push(startInfo.getAttribute('data-grid-tablet'));
                    gridClasses.push(startInfo.getAttribute('data-grid-smartphone'));
                        
                }
    
                const wrapperParent = wrapperStart.closest('li');
                const div = document.createElement('div');
                div.className = "wrapper_container";
                
                if ( startInfo ) {
                    div.classList.add(...gridClasses);
                }
                
                div.id = "Containerfor" + wrapperParent.id;
    
                wrapperParent.after(div);
    
                if (wrapperStack.length > 0) {
                    // verschachtelt -> letzter Wrapper im Stack ist der Eltern-Container
                    wrapperStack[wrapperStack.length - 1].appendChild(div);
                }
    
                div.appendChild(wrapperParent);
                wrapperStack.push(div);
            }
    
            else if (wrapperEnd) {
                
                li.classList.add('themore_ending_wrapper');
                
                if (wrapperStack.length > 0) {
                    wrapperStack[wrapperStack.length - 1].appendChild(li);
                    wrapperStack.pop(); // eine Ebene hoch
                }
            }
    
            else {

                if (wrapperStack.length > 0) {
                    wrapperStack[wrapperStack.length - 1].appendChild(li);
                }
            }
        });
    });



