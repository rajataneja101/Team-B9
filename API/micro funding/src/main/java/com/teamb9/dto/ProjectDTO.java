package com.teamb9.dto;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.EntityListeners;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.validation.constraints.NotBlank;

import org.springframework.data.jpa.domain.support.AuditingEntityListener;

@Entity
@Table(name = "ProjectDetails")
@EntityListeners(AuditingEntityListener.class)
public class ProjectDTO {
	
	@Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
	
	@NotBlank
    @Column(unique=true)
    private String project;
    
	@NotBlank
	private String user;
	
	@NotBlank
	private String projectName;

	private String description;
	
	private int fundingRequired;
	
	private int fundingDone;
	
	private String government;

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getProject() {
		return project;
	}

	public void setProject(String project) {
		this.project = project;
	}

	public String getUser() {
		return user;
	}

	public void setUser(String user) {
		this.user = user;
	}

	public String getDescription() {
		return description;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	public int getFundingRequired() {
		return fundingRequired;
	}

	public void setFundingRequired(int fundingRequired) {
		this.fundingRequired = fundingRequired;
	}

	public int getFundingDone() {
		return fundingDone;
	}

	public void setFundingDone(int fundingDone) {
		this.fundingDone = fundingDone;
	}
	
	
	public String getProjectName() {
		return projectName;
	}

	public void setProjectName(String projectName) {
		this.projectName = projectName;
	}
	
	public String getGovernment() {
		return government;
	}

	public void setGovernment(String governtment) {
		this.government = governtment;
	}

}
