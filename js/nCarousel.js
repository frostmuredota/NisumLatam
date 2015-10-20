 /* Horizontal Carosuel with fadeout
  *
  * 
  *
  * HTML Presettings required: 
  *
  * - Define custom wrapper with any id
  *
  * - Standard classes defined 
  *    
  *     for top container : ".carousel-wrapper"
  *     for left scroll controller : ".left-scroll"
  *     for right scroll controller : ".right-scroll"  
  *     for ul element : ".carousel-ul"
  *     for ul wrapper : "carousel_inner"
  *     
  * - Example HTML layout for carousel of three images         
  *     
  *    <div id="myCustomId" class="carousel-wrapper">
  *       <div class="left-scroll">
  *            <img src="images/leftArrow.jpg"/> 
  *       </div>
  *       <div class="carousel_inner">
                 <ul class="carousel-ul">
                    <li>
                        <a href="#">
                            <img src="images/gm1.jpg">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/gm2.jpg">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/gm2.jpg">
                        </a>
                    </li>
                 </ul>   
          </div>
          <div class="right-scroll">
                <img src="images/leftArrow.jpg"/> 
          </div>
       </div> 
  *     
  *     
  * - Initiating Carousel
  *
  *  $(document).ready(function(){
        
            $("#myCustomId").runCarousel(configObj); 

    });
  *
  *

  */

 (function($) {

     //Defining Globals
     var imageWidth, defaultLeft;

     function runCarousel(configObj) {
         var carouselContainer = this,
             pauseController = false,
             carouselRunner;

         //Default config obj   
         var defConfig = {
             fadeSides: true,
             offSetMode: true,
             defaultOpacity: "0.2",
             autoSlide: false,
             slideDuration: 5000,
             hoverPause: true,
             slidesCount: 2,
             animationTime: 500
         };

         //Getting merged configuration  
         var configObj = $.extend(defConfig, configObj);
         imageWidth = carouselContainer.find(".carousel-ul li").outerWidth(true); //(Including margin)

         var screenResolution = $(document).width();

         
         if(imageWidth*configObj.slidesCount >screenResolution){
            console.error("Cannot render the slide show. Reduce the number of slides per transition");
            return;
         }
         var setOffWidth = imageWidth*configObj.slidesCount;
         defaultLeft = setOffWidth - ((screenResolution - imageWidth*configObj.slidesCount)/2);

         defaultOperations(this, configObj, true);

         //Setting initial position
         carouselContainer.find(".carousel-ul").css("left", -defaultLeft + "px");
         if (configObj.fadeSides) {
             shadeController(this, configObj, true);
         }
         if (configObj.autoSlide) {
             carouselRunner = setInterval(function() {
                 if (!pauseController) {
                     runRightCarousel(carouselContainer, configObj);
                 }
             }, configObj.slideDuration);

             if (configObj.hoverPause) {
                 carouselContainer.hover(function() {
                     pauseController = true;
                 }, function() {
                     pauseController = false;
                 });
             }

         } 
          // On click controls
             carouselContainer.on("click", ".left-scroll", function() {
                 runLeftCarousel(carouselContainer, configObj);
             });

             carouselContainer.on("click", ".right-scroll", function() {
                 runRightCarousel(carouselContainer, configObj)
             });
         
         return this;
     }

     //Default operations
     function defaultOperations(container, configObj, prepend) {
         var ulContainer = $(container.find(".carousel-ul")[0]);
         if (prepend) {
             for (i = 0; i < configObj.slidesCount; i++) {
                 ulContainer.find('li:first').before($(ulContainer).find('li:last'));
             }
         } else {
             for (i = 0; i < configObj.slidesCount; i++) {
                 ulContainer.find('li:last').after($(ulContainer).find('li:first'));
             }
         }

     }

     //Fades out the sides

     function shadeController(container, configObj, initialLoad, side) {

         leftElementIndex = configObj.slidesCount - 1;
         rightElementIndex = leftElementIndex + configObj.slidesCount + 1;

         if (initialLoad) {
             container.find(".carousel-ul li:eq(" + leftElementIndex + ")").css("opacity", configObj.defaultOpacity);
             container.find(".carousel-ul li:eq(" + rightElementIndex + ")").css("opacity", configObj.defaultOpacity);
         } else {

             if (side == "left") {

                 //Shading back to 1 slowly.   
                 container.find(".carousel-ul li:eq(" + leftElementIndex + ")").animate({
                     "opacity": configObj.defaultOpacity
                 }, configObj.animationTime);

                 container.find(".carousel-ul li").eq(rightElementIndex).animate({
                     "opacity": configObj.defaultOpacity
                 }, configObj.animationTime);

                 leftElementIndex = leftElementIndex + configObj.slidesCount;
                 rightElementIndex = rightElementIndex + configObj.slidesCount;

                 container.find(".carousel-ul li:eq(" + leftElementIndex + ")").animate({
                     "opacity": "1"
                 }, configObj.animationTime);

                 container.find(".carousel-ul li").eq(rightElementIndex).animate({
                     "opacity": "1"
                 }, configObj.animationTime);

             } else {

                 //Shading back to 1 slowly.   
                 container.find(".carousel-ul li:eq(" + leftElementIndex + ")").animate({
                     "opacity": "1"
                 }, configObj.animationTime);

                 container.find(".carousel-ul li").eq(rightElementIndex).animate({
                     "opacity": "1"
                 }, configObj.animationTime);


                 leftElementIndex = leftElementIndex + configObj.slidesCount;
                 rightElementIndex = rightElementIndex + configObj.slidesCount;

                 container.find(".carousel-ul li:eq(" + leftElementIndex + ")").animate({
                     "opacity": configObj.defaultOpacity
                 }, configObj.animationTime);

                 container.find(".carousel-ul li").eq(rightElementIndex).animate({
                     "opacity": configObj.defaultOpacity
                 }, configObj.animationTime);
             }
         }

     }

     // Controls right arrow clicks
     function runRightCarousel(container, configObj) {

             //calculae the new left indent of the unordered list
             var leftOffset = parseInt(container.find(".carousel-ul").css('left')) - (imageWidth * configObj.slidesCount);

             if (configObj.fadeSides) {
                 shadeController(container, configObj, false);
             }
             //Animate the slides
             container.find(".carousel-ul:not(:animated)").animate({
                 'left': leftOffset
             }, configObj.animationTime, function() {

                 defaultOperations(container, configObj, false); //To append
                 //and get the left indent to the default -210px
                 container.find('.carousel-ul').css({
                     'left': -(defaultLeft) + 'px'
                 });
             });

         }
         // Controls left arrow clicks
     function runLeftCarousel(container, configObj) {

         //Prepend before animate.    
         defaultOperations(container, configObj, true); //To prepend                             
         if (configObj.fadeSides) {
             shadeController(container, configObj, false, "left"); //Since the additional nodes are prepended
         }
         var ulContainer = $(container.find(".carousel-ul")[0]);

         // to compensate additional nodes added at beginning.
         var rightValue = -parseInt(ulContainer.css("left")) + (imageWidth * configObj.slidesCount);
         ulContainer.css("right", rightValue);
         ulContainer.css("left", "auto");

         var rightOffset = parseInt(ulContainer.css('right')) - (imageWidth * configObj.slidesCount);

         container.find(".carousel-ul:not(:animated)").animate({
             'right': rightOffset
         }, configObj.animationTime, function() {
             ulContainer.css("left", -defaultLeft + "px");
             ulContainer.css("right", "auto");
         });
     }

     //Adding to protoType.
     $.fn.runCarousel = runCarousel;

 })(jQuery);
