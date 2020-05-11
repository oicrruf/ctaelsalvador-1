import React ,{ Component }from "react";
import { AiOutlineHeart, AiOutlineMessage } from "react-icons/ai";
import { FaRegHandPaper, FaRegLifeRing } from "react-icons/fa";

const ServiceList = [
    {
        icon: <AiOutlineHeart />,
        title: 'Amor',
        description: 'Lo buscamos, lo encontramos y luchamos por construirlo cada día.'
    },
    {
        icon: <AiOutlineMessage />,
        title: 'Confidencialidad',
        description: 'Garantizamos el resguardo de la información documental y personal del paciente o usuario y el de su núcleo familiar.'
    },
    {
        icon: <FaRegLifeRing />,
        title: 'Opción por la Vida',
        description: 'Es una invitación a transformar las tendencias destructivas de la subcultura de drogodependencia en un encuentro constructivo y creativo consigo mismo y con el otro.'
    },
    { 
        icon: <FaRegHandPaper />,
        title: 'Respeto',
        description: 'Cada persona es un ser diferente y tiene necesidades distintas. El respeto se refleja en el reconocimiento de las diferencias y atención de necesidades y derechos.'
    }
]

class ServiceThree extends Component{
    render(){
        const {column } = this.props;
        const ServiceContent = ServiceList.slice(0 , this.props.item);
        
        return(
            <React.Fragment>
                <div className="row">
                    {ServiceContent.map( (val , i) => (
                        <div className={`${column}`} key={i}>
                            <a href="/service-details">
                                <div className="service service__style--2">
                                    <div className="row">
                                        <div className="icon col-sm-2">
                                            {val.icon}
                                        </div>
                                        <div className="content col-sm-10">
                                            <h3 className="title">{val.title}</h3>
                                            <p>{val.description}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    ))}
                </div>
            </React.Fragment>
        )
    }
}
export default ServiceThree;
