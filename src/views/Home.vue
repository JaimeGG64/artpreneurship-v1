<template>
  <main class="home">
    <section class="artperneurship">
      <img class="artperneurship__logo" src="../assets/global/logo.svg" alt="" />
      <h1 class="artperneurship__heading">Artpreneurship</h1>
      <p class="artperneurship__copy">Artperneurship is a uniquely designed program that embraces the entrepreneurial mindset, specifically for students of art and humanities. While developing their personal work, students in the program can adapt and transform that work into an entrepreneurial venture.</p>
      <router-link class="artperneurship__btn" to="/sponsorship">Donate</router-link> 
      <img class="artperneurship__image" src="../assets/global/air_rally_illustration_1.png" alt="" />
    </section>
    <section class="about-program">
      <h2 class="about-program__heading">About Our Program</h2>
      <p class="about-program__copy"><b>This is a uniquely designed program that embraces the entrepreneurship mindset, specifically for students pursuing arts and humanities.</b></p>
      <p class="about-program__copy">Artpreneurship is intended to create a broader understanding for artists and students in humanities to leverage their talent and develop a series of skills that will enhance their career path—whether in arts, dance, film, journalism, literature, music, radio, television, theatre, theology/religion, or writing—for business practices. Students in arts and humanities fields have always been known to “create,” and many do so for personal reasons and to share their work with others. Students combine creativity and critical thinking, and they are natural collaborators. Through Artpreneurship, we believe students in the program, while developing their personal work, can adapt and transform that work for an entrepreneurial venture.</p>
      <router-link class="about-program__btn" to="/about">Learn More</router-link>
    </section>
    <section class="gallery">
      <h2 class="gallery__heading">Gallery</h2>
    </section>
    <section class="program-feature">
      <h2 class="program-feature__heading">Program Features</h2>
      <p class="program-feature__copy">Artpreneurship consists of four main critical features.</p>
      <dl class="program-feature__list">
        <div class="program-feature__item-wrapper">
          <router-link class="program-feature__link" to="/collaborators">
            <dt class="program-feature__term">Collaborators</dt>
            <dd class="program-feature__def">Key industry and community partners who are advocates and network providers.</dd>
            <img class="program-feature__icon" src="../assets/home/icon-people.svg"/>
          </router-link>
        </div>
        <div class="program-feature__item-wrapper">
          <router-link class="program-feature__link" to="/business">
            <dt class="program-feature__term">Business</dt>
            <dd class="program-feature__def">Our core mission is to emphasize the importance of the business side of creativity.</dd>
            <img class="program-feature__icon" src="../assets/home/icon-suitcase.svg"/>
          </router-link>
        </div>
        <div class="program-feature__item-wrapper">
          <router-link class="program-feature__link" to="/sponsorship">
            <dt class="program-feature__term">Sponsorship</dt>
            <dd class="program-feature__def">Sponsors provide seed funding or other resources to continue the program. </dd>
            <img class="program-feature__icon" src="../assets/home/icon-dollar.svg"/>
          </router-link>
        </div>
        <div class="program-feature__item-wrapper">
          <router-link class="program-feature__link" to="/awards">
            <dt class="program-feature__term">Awards</dt>
            <dd class="program-feature__def">We celebrate student achievement by giving creatives an opportunity to be recognized.</dd>
            <img class="program-feature__icon" src="../assets/home/icon-award.svg"/>
          </router-link>
        </div>
      </dl>
    </section>
    <section class="knowbility">
      <p class="knowbility__copy">We are partnering with <img class="knowbility__logo" src="../assets/home/knowbility-logo.svg" alt="Knowbility" /></p>
      <a class="knowbility__btn" href="https://www.knowbility.org/" target=_blank>Learn More</a>
    </section>
  </main>
</template>

<script>
export default {
  name: 'Home',
  title: 'Home',
}
</script>

<style lang="scss">
@import "../scss/button-styles.scss";
@import "../scss/variables.scss";
.home{
  background: $white;
}
.artperneurship{
  display: grid;
  grid-template-columns: auto;
  grid-template-rows: repeat(4, auto);
  grid-row-gap: 1.25rem;
  &__image{
    width: 63%;
    grid-row: 1/2;
    justify-self: center;
  }
  &__logo{
    display: none;
  }
  &__heading{
    grid-row: 2/3;
    font-size: 2rem;
    padding: 0 $mobile-gutter;
    text-align: center;
  }
  &__copy{
    grid-row: 3/4;
    font-weight: 600;
    padding: 0 $mobile-gutter;
  }
  &__btn{
    @include base-btn-style($blue, none);
    width: 7rem;
    justify-self: center;
    margin-bottom: 4rem;
    &:hover,
    &:focus {
      @include base-btn-blur(30px, $blue);
    }
  }
}
.about-program{
  display: grid;
  grid-template-columns: auto;
  grid-template-rows: repeat(4, auto);
  grid-row-gap: 1.25rem;
  &__heading{
    font-size: 2rem;
    font-weight: 900;
    padding: 0 $mobile-gutter;
    text-align: center;
  }
  &__copy{
    padding: 0 $mobile-gutter;
    b{
      font-size: 1.12rem;
    }
  }
  &__btn{
    @include base-btn-style($yellow-hue-1, none);
    width: 7rem;
    justify-self: center;
    &:hover,
    &:focus {
      @include base-btn-blur(30px, $yellow-hue-1);
    }
  }
}
.gallery{
  &__heading{
    font-size: 2rem;
    font-weight: 900;
    padding: 0 $mobile-gutter;
    text-align: left;
  }
}
.program-feature{
  &__heading{
    font-size: 2rem;
    font-weight: 900;
    text-align: center;
  }
  &__copy{
    padding: 0 $mobile-gutter;
    font-weight: 600;
  }
  &__list{
    display: grid;
    grid-row-gap: $mobile-gutter;
    padding: 1.25rem $mobile-gutter 5rem $mobile-gutter;
  }
  &__item-wrapper{
    border-radius: 7px;
    padding: 2rem;
    box-shadow: 0 3px 30px rgba(0,0,0, .07);
  }
  &__link{
    display: grid;
    grid-row-gap: 1rem;
    text-decoration: none;
    color: $black-hue-1;
  }
  &__def{
    margin: 0;
  }
  &__icon{
    width: 4rem;
    grid-row: 1/2;
  }
}
.knowbility{
  background: $light-pink;
  height: 20rem;
  display: grid;
  justify-content: center;
  align-content: center;
  grid-row-gap: 1.5rem;
  &__copy{
    font-size: 2rem;
    padding: 0 $mobile-gutter;
    font-weight: 600;
    text-align: center;
    line-height: 2.5rem;
  }
  &__btn{
    @include base-btn-style($white, none);
    width: 7rem;
    justify-self: center;
    &:hover,
    &:focus {
      @include base-btn-blur(30px, $white);
    }
  }
  &__logo{
    height: 3rem;
    vertical-align: bottom;
  }
}
@media screen and (min-width: map-get($break-point , "md")) {
  .artperneurship{
    grid-template-columns: auto 42%;
    grid-row-gap: 1.5rem;
    grid-column-gap: 1.35rem;
    padding: 5rem $tablet-gutter;
    &__logo, &__heading, &__copy, &__btn{
      grid-column: 1/2;
    }
    &__heading, &__copy{
      padding: 0;
      text-align: left;
    }
    &__logo{
      display: block;
      width: 5.5rem;
    }
    &__btn{
      justify-self: start;
      margin-bottom: 0;
    }
    &__image{
      grid-column: 2/3;
      grid-row: 1/5;
      width: 100%;
      align-self: center;
    }
  }
  .about-program{
    &__heading, &__copy{
      padding: 0;
      width: 80%;
      justify-self: center;
    }
  }
  .program-feature{
    display: grid;
    grid-template-columns: auto 58%;
    grid-column-gap: 8.5rem;
    grid-template-rows: 6rem;
    padding: 8rem $tablet-gutter;
    &__heading, &__copy, &__list{
      padding: 0
    }
    &__item-wrapper{
      padding: 1.25rem;
    }
    &__heading{
      text-align: left;
    }
    &__list{
      grid-column: 2/3;
      grid-row: 1/3;
    }
    &__link{
      grid-row-gap: .25rem;
    }
    &__term{
      font-size: 1.15rem;
    }
    &__def{
      font-size: 1rem;
    }
    &__icon{
      width: 2.5rem;
    }
  }
}

@media screen and (min-width: map-get($break-point , "lg")) {
  .artperneurship{
    grid-template-columns: auto 44%;
    grid-column-gap: 4rem;
  }
  .about-program{
    &__heading, &__copy{
      width: 61%;
    }
  }
  .program-feature{
    grid-template-columns: auto 67%;
    grid-column-gap: 7.5rem;
    &__list{
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 1rem;
    }
    &__item-wrapper{
      padding: 1.5rem 1rem;
    }
  }
}
</style>
