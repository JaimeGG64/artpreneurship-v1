<template>
  <main class="about">
    <section class="about-us">
      <h1 class="about-us__heading">About Us</h1>
      <p
        class="about-us__copy"
      >Artpreneurship was developed to help all artists, creatives, and designers to start or sustain a business, whether as a sole inventor, contributing innovator, or as an equal partner when developing a new product or service. With proven curriculums and support from collaborators, the goal of Artpreneurship is to create Artpreneurs who will use their thinking, curiosity, and talents to enhance society by developing products and services that improve human lives.</p>
      <router-link to="/sponsorship" class="about-us__btn">Donate</router-link>
      <picture class="about-us__image">
        <source media="(min-width: 1024px)" srcset="../assets/about/about-group-photo-lg.jpg">
        <source media="(min-width: 768px)" srcset="../assets/about/about-group-photo-md.jpg">
        <img src="../assets/about/about-group-photo.jpg" alt="group photo on the beach" style="width: 100%">
      </picture>
    </section>
    <section class="goals">
      <h2 class="goals__heading">Our Goal</h2>
      <p
        class="goals__copy"
      >Is to support artists, creators, and designers in their pursuit to create sustainable business practices, which will allow for personal and professional growth. Students will explore opportunities and learn how to solve problems by integrating design thinking, design sprints, and other creative processes. Students will design business strategies based on validated assumptions, using the feedback loop: design, measure, and learn.</p>
      <ul class="goals__list">
        <li class="goals__list-item">
          Students will be encouraged to attend a series of lectures, workshops, and seminars to better familiarize themselves with business and business applications.
          <img
            class="goals__list-item-icon"
            src="../assets/global/icon-check.svg"
            alt=""
          />
        </li>
        <li class="goals__list-item">
          Students will tour and visit various businesses and will have an opportunity to learn and share their business models.
          <img
            class="goals__list-item-icon"
            src="../assets/global/icon-check.svg"
            alt=""
          />
        </li>
        <li class="goals__list-item">
          Students will be introduced to different levels of business development.
          <img
            class="goals__list-item-icon"
            src="../assets/global/icon-check.svg"
            alt=""
          />
        </li>
      </ul>
      <img class="goals__image" src="../assets/global/air_rally_illustration_2.svg" />
    </section>
    <section class="curricula">
      <div class="curricula__copy-wrapper">
        <h2 class="curricula__heading">Curricula</h2>
        <p
          class="curricula__copy"
        >The following is a short outline for new businesses. And there are three tiers of potential curriculums we can build.</p>
        <p
          class="curricula__copy"
        >Through these hands-on curriculum options, students will start, refine, or expand their work for an entrepreneurial venture.</p>
      </div>
      <dl class="curricula__list">
        <div class="curricula__list-item-wrapper">
          <dt class="curricula__list-term">Idealist</dt>
          <dd class="curricula__list-def">
            First is the Idealist. These are individuals who may have a dream of opening up a new business, but they really don’t have many resources or knowledge about how to start a new business.
          </dd>
          <img class="curricula__list-icon" src="../assets/about/icon-cloud.svg" alt="" />
        </div>
        <div class="curricula__list-item-wrapper">
          <dt class="curricula__list-term">Start-Ups</dt>
          <dd class="curricula__list-def">
            The second group is a pre-existing group of “Start-Ups.” They have some knowledge about business, but they need additional help.
          </dd>
          <img class="curricula__list-icon" src="../assets/about/icon-power.svg" alt="" />
        </div>
        <div class="curricula__list-item-wrapper">
          <dt class="curricula__list-term">Owners</dt>
          <dd class="curricula__list-def">
            The last group is comprised of existing business owners who simply want to expand or make their companies more sustainable.
          </dd>
          <img class="curricula__list-icon" src="../assets/about/icon-suitcase.svg" alt="" />
        </div>
      </dl>
    </section>
    <section class="cooperation">
      <h2 class="cooperation__heading">Cooperation</h2>
      <p
        class="cooperation__copy"
      >The Artpreneurship Program will complement and align with the efforts of the David Nazarian College of Business and Economics in creating more inclusive entrepreneurship on campus. It is also intended to share and complement the work of Research and Graduate Studies.</p>
      <p
        class="cooperation__copy"
      >Some of the topics listed here will be provided to those students, but again, many of the curriculum items and topics already exist from COBAE, and the Artpreneurship Program will complement and rely heavily on existing entrepreneurship resources.</p>
    </section>
  </main>
</template>

<script>
export default {
  name: "about",
  title: "About"
};
</script>

<style lang="scss">
@import "../scss/button-styles.scss";
@import "../scss/variables.scss";

$mobile-gutter: 1.5rem;
$tablet-gutter: 3.25rem;

$tablet-font-size: .85rem;

%mobile-heading {
  padding: 1rem $mobile-gutter;
  font-weight: 900;
  font-size: 2rem;
  font-weight: 600;
  text-align: center;
}

.about {
  background: $white;
}
.about-us {
  display: grid;
  grid-template-columns: 100%;
  grid-template-rows: 4;
  &__heading {
    @extend %mobile-heading;
  }
  &__copy {
    padding: 0 $mobile-gutter;
    font-weight: 600;
  }
  &__btn {
    @include base-btn-style($yellow-hue-1, none);
    grid-row: 4/5;
    width: 6.5rem;
    justify-self: center;
    margin: 3rem 0;
    &:hover,
    &:focus {
      @include base-btn-blur(30px, $yellow-hue-1);
    }
  }
  &__image {
    grid-row: 1/2;
    width: 100%;
  }
}
.goals {
  display: grid;
  grid-template-columns: 100%;
  grid-template-rows: repeat(4, auto);
  padding: $mobile-gutter $mobile-gutter 5rem $mobile-gutter;
  &__heading {
    @extend %mobile-heading;
  }
  &__copy {
    font-weight: 600;
  }
  &__list {
    grid-row: 3/4;
    padding: 2rem 0;
  }
  &__list-item {
    display: grid;
    grid-template-columns: 4.75rem auto;
    margin-bottom: 1rem;
    font-size: 1.1rem;
    margin-bottom: 2rem;
    &-icon {
      width: 3rem;
      justify-self: start;
      grid-column: 1/2;
      grid-row: 1/2;
      padding-top: 0.5rem;
    }
  }
  &__image {
    height: 20rem;
    align-self: center;
    justify-self: center;
  }
}
.curricula {
  display: grid;
  grid-template-columns: 100%;
  grid-template-rows: repeat(3, auto);
  &__heading {
    @extend %mobile-heading;
  }
  &__copy-wrapper {
    background: $yellow-hue-1;
    border-radius: 0;
    padding: 2rem $mobile-gutter;
  }
  &__list {
    padding: 3rem $mobile-gutter;
    &-item-wrapper {
      display: grid;
      grid-template-columns: 5.5rem auto;
      grid-template-rows: repeat(2, auto);
      margin-bottom: 3rem;
      grid-row-gap: 1rem;
    }
    &-term {
      grid-row: 1/2;
      grid-column: 2/3;
      align-self: end;
      line-height: 1.5rem;
      font-size: 1.65rem;
    }
    &-def {
      grid-row: 2/3;
      grid-column: 1/3;
      margin: 0;
    }
    &-icon {
      grid-row: 1/2;
      grid-column: 1/2;
      width: 4rem;
    }
  }
}
.cooperation {
  padding-bottom: 2.5rem;
  &__heading {
    @extend %mobile-heading;
  }
  &__copy {
    padding: 0 $mobile-gutter;
  }
}

@media screen and (min-width: map-get($break-point , "md")) {
  .about {
    background: url("../assets/about/about-background-md.png");
    background-position: center 98%;
    background-repeat: no-repeat;
    background-size: contain;
  }
  .about-us {
    grid-template-columns: 100%;
    grid-template-rows: 4;
    &__heading {
      text-align: center;
      font-size: 2rem;

    }
    &__copy {
      padding: 0 $tablet-gutter;
      font-weight: 600;
    }
    &__btn {
      @include base-btn-style($yellow-hue-1, none);
      grid-row: 4/5;
      width: 6.5rem;
      justify-self: center;
      margin: 3rem 0;
    }
    &__image {
      grid-row: 1/2;
      width: 100%;
    }
  }
  .goals {
    display: grid;
    grid-template-columns: 52% 48%;;
    grid-template-rows: repeat(3, auto);
    padding: 0;
    &__heading {
      padding: .75rem $tablet-gutter;
      grid-row: 1/2;
      grid-column: 1/3;
      font-size: 2rem;
    }
    &__copy {
      padding: 0 $tablet-gutter 1.5rem $tablet-gutter;
      grid-row: 2/3;
      grid-column: 1/3;
      font-size: $tablet-font-size;
      line-height: 2rem
    }
    &__list {
      grid-row: 3/4;
      padding: 2rem 0 2rem $tablet-gutter;
    }
    &__list-item {
      display: grid;
      grid-template-columns: 3.75rem auto;
      margin-bottom: 1rem;
      font-size: $tablet-font-size;
      &-icon {
        width: 2rem;
        justify-self: start;
        grid-column: 1/2;
        grid-row: 1/2;
        padding-top: 0.4rem;
      }
    }
    &__image {
      height: 20rem;
      align-self: center;
      justify-self: center;
    }
  }
  .curricula {
    display: grid;
    grid-template-rows: 5rem auto 5rem;
    grid-template-columns: repeat(2, 1fr);
    &__heading,
    &__copy {
      grid-column: 1/2;
      margin-bottom: 2rem;
    }
    &__heading{
      padding: 0;
      font-weight: 600;
      font-size: 1.5rem;
      text-align: left;
    }
    &__copy{
      font-size: $tablet-font-size;
    }
    &__copy-wrapper {
      grid-column: 1/2;
      grid-row: 1/6;
      border-radius: 0 10px 10px 0;
      display: grid;
      align-content: center;
      padding: $tablet-gutter;
    }
    &__list{
      grid-column: 2/3;
      grid-row: 1/5;
      grid-area: "list";
      padding: 3.25rem $tablet-gutter 3.25rem 2.5rem;
      display: grid;
      grid-row-gap: 2rem;
      &-item-wrapper{
        grid-template-columns: 3.5rem auto;
        grid-template-rows: repeat(2, auto);
        margin-bottom: 0;
        grid-row-gap: .25rem;
      }
      &-term, &-def {
        grid-column: 2/3;
      }
      &-term {
        grid-row: 1/2;
        font-weight: 700;
        font-size: 1.25rem;
      }
      &-def {
        grid-row: 2/3;
        font-size: $tablet-font-size;
        margin: 0;
      }
      &-icon {
        grid-column: 1/2;
        grid-row: 2/3;
        width: 2.3rem;
        justify-self: start;
        padding-top: 0.4rem;
      }
    }
  }
  .cooperation {
    padding: 9rem $tablet-gutter 14rem $tablet-gutter;
    display: grid;
    grid-row-gap: 2rem;
    &__heading, &__copy {
      padding: 0;
      margin-bottom: 0;
    }
    &__copy{
      font-size: $tablet-font-size;
      line-height: 1.75rem;
    }
  }
}

@media screen and (min-width: map-get($break-point , "lg")) {
  .about {
    background: url("../assets/about/about-background-lg.png");
    background-position: center 97%;
    background-repeat: no-repeat;
    background-size: contain;
  }
  .about-us {
    grid-template-columns: 54% 46%;
    grid-template-rows: repeat(5, auto);
    grid-row-gap: 1.25rem;
    &__heading,
    &__copy,
    &__btn {
      grid-column: 2/3;
      margin: 0 $tablet-gutter;
    }
    &__heading {
      grid-row: 2/3;
      padding: 0;
    }
    &__copy {
      grid-row: 3/4;
      padding: 0;
    }
    &__btn {
      justify-self: start;
    }
    &__image {
      grid-column: 1/2;
      grid-row: 1/6;
      width: 100%;
    }
  }
  .goals {
    grid-template-columns: 55% 45%;
    grid-template-rows: 5rem auto auto auto 5rem;
    padding: 0 $tablet-gutter;
    grid-row-gap: 1rem;
    &__heading,
    &__copy,
    &__list {
      grid-column: 1/2;
      padding: 0;
    }
    &__heading {
      grid-row: 2/3;
      text-align: left;
    }
    &__copy {
      grid-row: 3/4;
    }
    &__list {
      grid-row: 4/5;
      padding-left: 5rem;
      padding: 0;
    }
    &__list-item {
      margin-bottom: 1rem;
    }
    &__image {
      grid-column: 2/3;
      grid-row: 1/6;
      height: 28rem;
      align-self: center;
      justify-self: end;
    }
  }
  .curricula{
    &__copy-wrapper{
      padding: 0 7rem 0 $tablet-gutter;
    }
  }
  .cooperation {
    padding: 10rem ($tablet-gutter * 4) 8rem ($tablet-gutter * 4);
  }
}
</style>
