
      var aniContainer = document.getElementById("ani-container");
      var width = aniContainer.offsetWidth;
      var height = aniContainer.offsetHeight;
      var circles = [];

      for (var i = 0; i < 50; i++) {
        var circle = document.createElement("div");
        circle.classList.add("circle");
        circle.style.top = Math.random() * height + "px";
        circle.style.left = Math.random() * width + "px";
        aniContainer.appendChild(circle);
        circles.push(circle);
      }

      function updateCircles() {
        for (var i = 0; i < circles.length; i++) {
          circles[i].style.top = Math.random() * height + "px";
          circles[i].style.left = Math.random() * width + "px";
        }
      }

      setInterval(updateCircles, 2000);