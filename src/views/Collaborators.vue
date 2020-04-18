<template>
    <main class="collaborators">
        
        <section class="our-collaborators">
            <div class="our-collaborators__text-wrapper">
                <h1 class="our-collaborators__heading">Our Collaborators</h1>
                <p class="our-collaborators__copy">Our collaborators are alumni, community, and business folks who simply love to support artists, creatives, and designers. Like us, these are the people who believe that art can transform communities and add value to everyday life. These collaborators have provided our students with resources, financial support, mentorships, and simply advocating for our student artists, creative, and designers. Thank you! If you would like to be part of our collaborator community, please reach out to us.</p>
                <a class="our-collaborators__btn" href="#">Become A Collaborator</a>
            </div>
            <picture class="our-collaborators__image">
                <source media="(min-width: 1920px)" srcset="../assets/collaborators/collaborators-celebration-xl.jpg">
                <source media="(min-width: 1024px)" srcset="../assets/collaborators/collaborators-celebration-lg.jpg">
                <source media="(min-width: 768px)" srcset="../assets/collaborators/collaborators-celebration-md.jpg">
                <img src="../assets/collaborators/collaborators-celebration.jpg" alt="student collaborating" style="width: 100%">
            </picture>
        </section>
        <section class="collab-list-section">
            <dl class="collab-list-section__list">
                <Collaborator v-for="(collaborator, index) in collaborators" :key=index :collabInfo=collaborator />
            </dl>
        </section>
    </main>
</template>

<script>
import Collaborator from '../components/Collaborator.vue'

import Aaron from '../assets/collaborators/Aaron.png'
import Douglas from '../assets/collaborators/Douglas.png'
import Jessica from '../assets/collaborators/Jessica.png'
import Li from '../assets/collaborators/Li.png'
import Tom from '../assets/collaborators/Tom.png'

export default {
    name: 'collaborators',
    title: 'Collaborators',

    components: {
        Collaborator,
    },

    data: function() {
        return {
            collaborators: [],
        }
    },
    methods: {
        pushCollaborator: function(title, alt, file, desc) {
            var collab = {
                Name: title,
                description: desc,
                filename: file,
                altTxt: alt,
            };
            this.collaborators.push(collab);
        },
    },
    beforeMount() {
        this.pushCollaborator("Jessica Arana", "", Jessica, "Jessica Arana is a passionate storyteller with an insatiable curiosity for brand, company, and social culture. She has experience with brand strategy, identity design systems, and editorial and book design. Her background in cultural studies, art, social justice, education, and activism set her apart as a designer with passion and a purpose. Jessica has lead design work for: Disney, Yahoo!, McCann Erickson, IPG MediaBrands, Transamerica, and Ergobaby, among others. She is also an artist, educator, and a committee lead for AIGA National’s Diversity and Inclusion taskforce.")
        this.pushCollaborator("Aaron Atchison", "", Aaron, "Aaron Atchison is the founder and creative director of Farm Design, a Pasadena based branding agency. With over 20 years experience in graphic design, he has led and influenced a wide range of award-winning branding projects spanning from start-ups to industry leaders. Having grown up on a family farm in rural Montana, Aaron has implemented his small town values of strategic foresight, hard work and community to guide his creative process and inspire his team and clients. Aaron continues to share his life lesson stories through teaching and lectures to help guide students on their personal and professional journeys.")
        this.pushCollaborator("Douglas Davis", "", Douglas, "Brooklyn-based Douglas Davis enjoys being one of the variety of voices needed in front of and behind the concept, marketing plan or digital strategy. His approach to creativity combines right-brained creative problem solving with left-brained strategic thinking. This unique mix of creative strategy, integrated marketing and art direction is what Douglas brings into the boardroom or classroom. In 2011 Douglas founded The Davis Group and continues to offer strategic solutions to client branding, digital and design problems. In addition to client work, Douglas leverages his experience as an Associate Professor and Department Chair of the Communication Design program at New York City College of Technology, on the graduate level in the Branding and Integrated Communications (BIC) program at The City College of New York and digitally as a HOW Design University course contributor. His HOW Design University class, Creative Strategy and the Business of Design was published as a book in June 2016. Douglas has found an international audience through his relationship with HOW, as a judge of The Best Brand Awards and publishing in the European Business Review. In June 2018, Douglas was named co-chair of AIGA’s National Diversity and Inclusion Taskforce. Douglas enjoys interacting with creative people and presents at industry conferences throughout the U.S., Canada, India and Russia. Creative Strategist, Educator & Author, who depends on what day.")
        this.pushCollaborator("Li Lou", "", Li, "Li Liu, Ph.D. is currently an Assistant Professor with The Department of Computer Science at California State University, Northridge (CSUN). He is passionate about enabling accessibility of computing. His research breaks barriers created by computing technology, especially for people with special needs. At CSUN, he co-directs the Human Computing Lab and serves on the Scientific/Research Committee of the annual CSUN Assistive Technology Conference. He also develops a new master’s degree program in Assistive Technology Engineering.")
        this.pushCollaborator("Tom White", "", Tom, "Tom is the Impact Director at the Los Angeles Cleantech Incubator. He is responsible for developing and managing programs aimed at fostering and measuring the economic, social and environmental impact of LACI and its portfolio companies, and other incubators and partner organizations nationally. \nTom’s expertise is in positioning programs and organizations to secure funding and gain access to new customers. Focusing on innovation and sustainability, Tom has helped secure record levels of funding and sales for corporations, design firms and advertising agencies, academic institutions and entrepreneurial ventures. An IDSA Award Winning Industrial Designer, storyteller and customer experience architect, Tom has developed brand positioning and communication strategies that have helped raise billions for organizations like Lockheed-Martin, Motorola, Volvo, Philips and others. His “Master the Pitch” series helps entrepreneurs prepare presentations to secure investor funding. He speaks globally to entrepreneurial, academic, investor and other groups.")
    },
}
</script>

<style lang="scss">
@import "../scss/variables.scss";
@import "../scss/button-styles.scss";

.our-collaborators{
    display: grid;
    &__text-wrapper{
        padding: $mobile-gutter;
        display: grid;
        row-gap: 1rem;
    }
    &__heading{
        font-size: 2rem;
        text-align: center;
    }
    &__copy{
        font-size: 1.1rem;
        font-weight: $weight-bold;
    }
    &__image{
        grid-row: 1/2;
    }
    &__btn{
        @include base-btn-style($blue, none);
        width: 14rem;
        justify-self: center;
        grid-row: 3/4;
        &:hover,
        &:focus {
            @include base-btn-blur(30px, $blue);
        }
    }
}

.collab-list-section {
    padding: $mobile-gutter;
    &__list{
        display: grid;
        grid-template-columns: 100%;
        grid-gap: $mobile-gutter;
    }
}

@media screen and (min-width: map-get($break-point , "md")) {
    .our-collaborators{
        &__text-wrapper{
            padding: $tablet-gutter;
            row-gap: 1.5rem;
        }
    }
    .collab-list-section {
        padding: $tablet-gutter;
        &__list{
            grid-template-columns: repeat(2, auto);
            grid-gap: $tablet-gutter;
        }
    }
}

@media screen and (min-width: map-get($break-point , "lg")) {
    .our-collaborators{
        grid-template-columns: auto 45%;
        &__text-wrapper{
            row-gap: 1.25rem;
            align-content: center;
        }
        &__heading{
            text-align: left;
        }
        &__btn{
            justify-self: start;
        }
        &__image{
            grid-column: 2/3;
        }
    }
    .collab-list-section {
        padding: 5rem $tablet-gutter;
        &__list{
            grid-template-columns: repeat(3, auto);
        }
    }
}

@media screen and (min-width: map-get($break-point , "xl")) {
    .our-collaborators{
        grid-template: auto 37%;
        &__text-wrapper{
            padding: $lg-gutter;
        }
        &__heading{
            font-size: 3.5rem;
        }
    }
    .collab-list-section {
        padding: $lg-gutter;
    }
}
</style>
