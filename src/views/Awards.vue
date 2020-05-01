<template>
    <main class="awards">
        <section class="artpreneur-awards">
            <h1 class="artpreneur-awards__heading">The Artpreneur Award</h1>
            <p class="artpreneur-awards__copy">The Artpreneur award is given, on an annual basis, to an Art and Design student who, in pursuing the study of art and design, has demonstrated the development of sustainable business practices. The Artpreneur Award is intended to encourage artists, designers, and creators to follow their passion and desire to create art…and to learn that the process of art-making has the power to create a sustainable business. Through art, creators and designers have an important role in society to make meaningful, positive contributions. It is in this spirit that the Artpreneur Award is given to a student who embodies an entrepreneur mindset.</p>
            <p class="artpreneur-awards__copy">The annual award is open to all art and design majors who are currently enrolled at CSUN. The following criteria will be utilized to decide on the student recipient. While studying art and design at CSUN, a student must have started an art-related business or have continued to develop a sustainable business, primarily utilizing their personal artwork, art-making, and other creative endeavors. The award is also meant for students to become motivated and encouraged to create a sustainable business with their art and art-making skills. The selected student will receive $2,000.00</p>
            <a class="artpreneur-awards__btn" href="mailto:dave.moon@ixla.org?subject=Artpreneur Award Application">Apply Now</a>
            <picture class="artpreneur-awards__image">
                <source media="(min-width: 1280px)" srcset="../assets/awards/awards-feature-img-xl.jpg">
                <source media="(min-width: 1024px)" srcset="../assets/awards/awards-feature-img-lg.jpg">
                <source media="(min-width: 768px)" srcset="../assets/awards/awards-feature-img-md.jpg">
                <img src="../assets/awards/awards-feature-img.jpg" alt="Students winning an artpreneurship award" style="width: 100%">
            </picture>
        </section>
        <section class="required-items">
            <h2 class="required-items__heading">The Following Items Should Be Included</h2>
            <dl class="required-items__list">
                <div class="required-items__list-item">
                    <dt class="required-items__list-item-term">Application Form & Faculty Letter</dt>
                    <dd class="required-items__list-item-def">Students should complete the application form and obtain one faculty letter of support.</dd>
                    <img class="required-items__list-item-icon" src="../assets/global/icon-check.svg" alt=""/>
                </div>
                <div class="required-items__list-item">
                    <dt class="required-items__list-item-term">Presentation</dt>
                    <dd class="required-items__list-item-def">Submit a 3 to 5-page slide presentation providing information about their art business with visuals.</dd>
                    <img class="required-items__list-item-icon" src="../assets/global/icon-check.svg" alt=""/>
                </div>
                <div class="required-items__list-item">
                    <dt class="required-items__list-item-term">Final Process</dt>
                    <dd class="required-items__list-item-def">The Scholarship Committee will identify the top three candidates and forward their files to the benefactor for the final decision.</dd>
                    <img class="required-items__list-item-icon" src="../assets/global/icon-check.svg" alt=""/>
                </div>
            </dl>
            <img class="required-items__image" src="../assets/global/air_rally_illustration_5.svg" alt=""/>
        </section>
    </main>
</template>

<script>
export default {
    name: 'awards',
    title: 'Awards',
};
</script>

<style lang="scss">
@import "../scss/button-styles.scss";
@import "../scss/variables.scss";

.artpreneur-awards{
    padding: 1rem $mobile-gutter;
    display: grid;
    row-gap: $mobile-gutter;
    &__heading{
        font-size: 2rem;
        text-align: center;
    }
    &__copy{
        font-size: 1.1rem;
        font-weight: $weight-bold;
    }
    &__btn{
        @include base-btn-style($blue, none);
        width: 9rem;
        justify-self: center;
        grid-row: 3/4;
        &:hover,
        &:focus {
            @include base-btn-blur(30px, $blue);
        }
    }
    &__image{
        grid-row: 2/3;
    }
}
.required-items{
    padding: $mobile-gutter;
    display: grid;
    row-gap: $mobile-gutter;
    &__heading{
        font-size: 1.75rem;
        font-weight: $weight-black;
    }
    &__list{
        display: grid;
        row-gap: $mobile-gutter;
        &-item{
            display: grid;
            row-gap: .5rem;
            grid-template-rows: repeat(2, auto);
            grid-template-columns: 4.75rem auto;
            &-term, &-def{
                grid-column: 2/3;
            }
            &-term{
                grid-row: 1/2;
                font-size: 1.5rem;
                line-height: 1.25;
            }
            &-def{
                grid-row: 2/3;
                margin: 0;
            }
            &-icon{
                grid-column: 1/2;
                grid-row: 1/3;
                width: 3rem;
                padding-top: .5rem;
            }
        }
    }
    &__image{
        grid-row: 1/2;
        width: 50%;
        justify-self: center;
    }
}

@media screen and (min-width: map-get($break-point , "md")) {
    .artpreneur-awards{
        padding: 1rem 0;
        padding: 0;
        &__image{
            grid-row: 1/2;
        }
        &__heading{
            font-size: 2.5rem;
            align-self: end;
        }
        &__copy{
            font-size: 1rem;
            font-weight: $weight-regular;
            line-height: 1.5;
            align-self: center;
        }
        &__btn{
            grid-row: 5/6;
            align-self: center;
        }
        &__heading, &__copy{
            padding: 0 $tablet-gutter;
        }
    }
    .required-items{
        padding: 3rem $tablet-gutter 0 $tablet-gutter;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, auto);
        &__heading{
            font-size: 1.25rem;
        }
        &__heading, &__list{
            grid-column: 2/3;
        }
        &__list{
            margin-bottom: 2rem;
        }
        &__image{
            grid-column: 1/2;
            grid-row: 1/3;
            width: 80%;
            align-self: end;
        }
    }
}

@media screen and (min-width: map-get($break-point , "lg")) {
    .artpreneur-awards{
        grid-template-columns: auto 43%;
        row-gap: .5rem;
        &__heading{
            text-align: left;
        }
        &__image{
            grid-column: 2/3;
            grid-row: 1/5;
        }
        &__btn{
            grid-row: 4/5;
            justify-self: start;
            margin-left: $tablet-gutter;
        }
        &__heading, &__copy, &__btn{
            grid-column: 1/2;
        }
    }
    .required-items{
        padding: 5rem $tablet-gutter 0 $tablet-gutter;
        grid-template-columns: auto 53%;
        &__heading{
            font-size: 1.5rem;
        }
        &__list{
            margin-bottom: 4rem;
            &-item{
                &-term{
                    font-size: 1.25rem;
                }
            }
        }
        &__image{
            width: 58%;
        }
    }
}

@media screen and (min-width: map-get($break-point , "xl")) {
    .artpreneur-awards{
        grid-template-columns: auto 34%;
        row-gap: 0;
        &__heading, &__copy{
            padding: 0 $lg-gutter;
        }
        &__heading{
            font-size: 3.75rem;
        }
        &__copy{
            line-height: 1.75;
        }
        &__btn{
            margin-left: $lg-gutter;
        }
    }
    .required-items{
        padding: 3rem $lg-gutter 0 $lg-gutter;
        grid-template-columns: auto 50%;
        row-gap: 3rem;
        &__heading{
            font-size: 1.75rem;
            align-self: end;
        }
        &__list{
            margin-bottom: 5rem;
            &-item{
                grid-template-columns: 6rem auto;
                row-gap: 0;
                &-term{
                    font-size: 1.5rem;
                }
                &-icon{
                    width: 3.5rem;
                    padding-top: 0;
                    align-self: center;
                }
            }
        }
        &__image{
            width: 57%;
        }
    }
}
</style>