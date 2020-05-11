import React, { Component } from "react";
import { FaFacebookF , FaLinkedinIn , FaTwitter } from "react-icons/fa";

let TeamContent = [
    {
        images: 'https://www.ctaelsalvador.com/images/team/eLoyola.jpg',
        title: 'Eduardo Loyola',
        designation: 'Director CTA El Salvador',
    },
    {
        images: 'https://www.ctaelsalvador.com/images/team/jUrias.jpg',
        title: 'Juan Carlos Urias',
        designation: 'Psicólogo Clínico',
    },
    {
        images: 'https://www.ctaelsalvador.com/images/team/wRochac.jpg',
        title: 'Wendy Araujo Rochac',
        designation: 'Médico Psiquiatra',
    },
    {
        images: 'https://www.ctaelsalvador.com/images/team/mSatta.jpg',
        title: 'Michele Satta',
        designation: 'Consejero',
    },
    {
        images: 'https://www.ctaelsalvador.com/images/team/cBolanos.jpg',
        title: 'Carlos Bolaños',
        designation: 'Consejero',
    },
    {
        images: 'https://www.ctaelsalvador.com/images/team/lGonzalez.jpg',
        title: 'Leticia González',
        designation: 'Consejera',
    }
];


class Team extends Component{
    render(){
        const {column} = this.props;
        return(
            <React.Fragment>
                {TeamContent.map((value , i ) => (
                    <div className={`${column}`} key={i}>
                        <div className="team">
                            <div className="thumbnail">
                                <img src={value.images} alt="Blog Images"/>
                            </div>
                            <div className="content">
                                <h4 className="title">{value.title}</h4>
                                <p className="designation">{value.designation}</p>
                            </div>
                        </div>
                    </div>
                ))}
            </React.Fragment>
        )
    }
}
export default Team;