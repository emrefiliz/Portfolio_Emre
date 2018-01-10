(function () {
    var thumb;

    showThumbs();

    function showThumbs() {
        let thumbContainer = document.querySelector('.thumbContainer');

        while (thumbContainer.firstChild) {
            thumbContainer.removeChild(thumbContainer.firstChild);
        }

        let content = workContent['work'];

        content.images.forEach(function (img, index) {

            let newThumb = document.createElement('img');
            newThumb.classList.add('thumb');
            newThumb.src = 'images/work_' + content.images[index];
            thumbContainer.appendChild(newThumb);
        });

        thumb = thumbContainer.querySelectorAll('.thumb');

        for (let i = 0; i < 15; i++) {
            thumb[i].addEventListener('click', selectWork, false);
        }

    }

    function selectWork(event) {
        //SHOW SELECTED WORK DESCRIPTON IN DESCRIPTIONCONTAINER...................
        //select descriptionContainer by classname...
        let descriptionContainer = document.querySelector('.descriptionContainer');

        //clean previous description.
        while (descriptionContainer.firstChild) {
            descriptionContainer.removeChild(descriptionContainer.firstChild);
        }

        //create a new div for description...
        let newDiv = document.createElement('div');
        newDiv.classList.add('description');

        //retrieve index from clicked thumb item.
        let workIndex = Array.from(thumb).indexOf(event.currentTarget);

        //retrieve work content from workContent.js
        let content = workContent['work'];

        //retrieve description from related clicked index.
        let text = content.imageDescriptions[workIndex];

        //append retrieved text in newly created div
        newDiv.append(text);

        //append newly created div into descriptionContainer.
        descriptionContainer.appendChild(newDiv);


        //SHOW SELECTED WORK IMAGE IN SELECTEDWORKCONTAINER...................
        let selectedWorkContainer = document.querySelector('.selectedWorkContainer');

        //clean previous selected work image.
        while (selectedWorkContainer.firstChild) {
            selectedWorkContainer.removeChild(selectedWorkContainer.firstChild);
        }

        //create a new img for description...
        let newImage = document.createElement('img');

        newImage.classList.add('workImage');


        newImage.src = 'images/work_' + content.images[workIndex];


        //append newly created img into descriptionContainer.
        selectedWorkContainer.appendChild(newImage);

    }


})();
